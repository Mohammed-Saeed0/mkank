from flask import Flask, request, jsonify
import sqlalchemy
import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
from nltk.corpus import stopwords
import pickle

app = Flask(__name__)

# Connect to MySQL database
engine = sqlalchemy.create_engine("mysql+pymysql://root:@127.0.0.1/realestate2")
properties = pd.read_sql_table('properties', con=engine)

# Combine text features into a single string for each property
properties['combined_features'] = properties.apply(lambda x: f"{x['purpose']} {x['type']} {x['description']} {x['city']}", axis=1)
stopWords = stopwords.words('english')

# Initialize TF-IDF Vectorizer
vectorizer = TfidfVectorizer(stop_words=stopWords)
tfidf_matrix = vectorizer.fit_transform(properties['combined_features'])

def find_similar_properties(property_id, properties, tfidf_matrix):
    target_index = properties[properties['id'] == property_id].index[0]
    target_features = tfidf_matrix[target_index]

    similarity_matrix = cosine_similarity(tfidf_matrix, target_features)

    # Create DataFrame for similarity results
    similarity_df = pd.DataFrame({
        'id': properties['id'],
        'similarity': similarity_matrix.flatten()
    })

    # Exclude the target property
    similar_properties = similarity_df[similarity_df['id'] != property_id].sort_values(by='similarity', ascending=False)

    # Merge with original properties data
    similar_properties = similar_properties.merge(properties, on='id')

    first_four = similar_properties.head(4)
    return first_four[['id', 'title', 'price', 'primary_image']].to_dict('records')

@app.route('/api/find_similar_properties', methods=['GET'])
def api_find_similar_properties():
    property_id = request.args.get('property_id', type=int)
    similar_properties = find_similar_properties(property_id, properties, tfidf_matrix)
    return jsonify(similar_properties)

if __name__ == '__main__':
    app.run(host='127.0.0.1', port=5000)
