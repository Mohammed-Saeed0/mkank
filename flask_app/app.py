import re
import sqlalchemy
from collections import defaultdict
import pandas as pd
from flask import Flask, request, jsonify
from nltk.tokenize import word_tokenize
from nltk.corpus import stopwords
from nltk.stem import PorterStemmer

app = Flask(__name__)

pattern = r'[^\w\s]'
stopWords = set(stopwords.words('english'))
stemmer = PorterStemmer()

# Setup SQLAlchemy to connect to your MySQL database
engine = sqlalchemy.create_engine("mysql+pymysql://root:@127.0.0.1/realestate2")
properties = pd.read_sql_table('properties', con=engine)

class DocumentSearchEngine:
    def __init__(self):
        self.documents = {}

    def build_dic(self, properties):
        for i, d in enumerate(properties['description']):
            if pd.notna(d):
                self.documents[i] = re.sub(pattern, '', d)

    def preprocess(self):
        for d in self.documents:
            tokens = word_tokenize(self.documents[d])
            tokens = [word for word in tokens if word not in stopWords]
            tokens = [word.lower() for word in tokens if word.isalpha()]
            tokens = [stemmer.stem(word) for word in tokens]
            self.documents[d] = tokens

    def create_inverted_index(self):
        inverted_index = defaultdict(list)
        for doc_id, text in self.documents.items():
            freq = defaultdict(int)
            for word in text:
                freq[word] += 1
            for word, count in freq.items():
                inverted_index[word].append((doc_id, count))
        return inverted_index

    def search(self, query):
        inverted_index = self.create_inverted_index()
        query = re.sub(pattern, '', query)
        query = query.lower().split()
        query = [word for word in query if word not in stopWords]
        query = [stemmer.stem(word) for word in query]

        doc_scores = defaultdict(int)
        result = None
        op = 'or'

        for token in query:
            if token in ['and', 'or', 'not']:
                op = token
                continue

            if token in inverted_index:
                term_set = set(doc_id for doc_id, _ in inverted_index[token])
            else:
                term_set = set()

            if op == 'and':
                if result is not None:
                    result &= term_set
                else:
                    result = term_set
            elif op == 'not':
                if result is not None:
                    result -= term_set
                else:
                    result = term_set
            else:  # 'or' or default
                if result is None:
                    result = term_set
                else:
                    result |= term_set

        if result:
            for doc_id in result:
                for term in query:
                    if term in inverted_index:
                        for i, count in inverted_index[term]:
                            if doc_id == i:
                                doc_scores[doc_id] += count

        ranked_docs = sorted(doc_scores.items(), key=lambda x: x[1], reverse=True)
        return [doc_id for doc_id, _ in ranked_docs]

engine = DocumentSearchEngine()
engine.build_dic(properties)
engine.preprocess()

@app.route('/search', methods=['GET'])
def search():
    query = request.args.get('query')
    app.logger.debug(f'Received query: {query}')
    if not query:
        return jsonify({'error': 'No query provided'}), 400

    try:
        results = engine.search(query)
        app.logger.debug(f'Search results: {results}')

        if not results:
            return jsonify([])

        properties_subset = properties.loc[results]
        properties_list = properties_subset.to_dict(orient='records')
        app.logger.debug(f'Properties list: {properties_list}')

        return jsonify(properties_list)
    except Exception as e:
        app.logger.error(f'Error processing query: {str(e)}')
        return jsonify({'error': 'Error processing query'}), 500

if __name__ == '__main__':
    app.run(host='127.0.0.1', port=5001)
