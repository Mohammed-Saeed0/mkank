<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class DocumentSearchEngine
{
    private $documents = [];
    private $pattern = '/[^\w\s]/';  // Remove punctuation
    private $stopWords;
    private $stemmer;

    public function __construct()
    {
        $this->stopWords = $this->getStopWords();
    }

    private function getStopWords()
    {
        return [
            'a', 'about', 'above', 'after', 'again', 'against', 'all', 'am', 'an', 'and', 'any', 'are', 'aren\'t', 'as',
            'at', 'be', 'because', 'been', 'before', 'being', 'below', 'between', 'both', 'but', 'by', 'can\'t', 'cannot',
            'could', 'couldn\'t', 'did', 'didn\'t', 'do', 'does', 'doesn\'t', 'doing', 'don\'t', 'down', 'during', 'each',
            'few', 'for', 'from', 'further', 'had', 'hadn\'t', 'has', 'hasn\'t', 'have', 'haven\'t', 'having', 'he', 'he\'d',
            'he\'ll', 'he\'s', 'her', 'here', 'here\'s', 'hers', 'herself', 'him', 'himself', 'his', 'how', 'how\'s', 'i',
            'i\'d', 'i\'ll', 'i\'m', 'i\'ve', 'if', 'in', 'into', 'is', 'isn\'t', 'it', 'it\'s', 'its', 'itself', 'let\'s',
            'me', 'more', 'most', 'mustn\'t', 'my', 'myself', 'no', 'nor', 'not', 'of', 'off', 'on', 'once', 'only', 'or',
            'other', 'ought', 'our', 'ours', 'ourselves', 'out', 'over', 'own', 'same', 'shan\'t', 'she', 'she\'d', 'she\'ll',
            'she\'s', 'should', 'shouldn\'t', 'so', 'some', 'such', 'than', 'that', 'that\'s', 'the', 'their', 'theirs',
            'them', 'themselves', 'then', 'there', 'there\'s', 'these', 'they', 'they\'d', 'they\'ll', 'they\'re', 'they\'ve',
            'this', 'those', 'through', 'to', 'too', 'under', 'until', 'up', 'very', 'was', 'wasn\'t', 'we', 'we\'d', 'we\'ll',
            'we\'re', 'we\'ve', 'were', 'weren\'t', 'what', 'what\'s', 'when', 'when\'s', 'where', 'where\'s', 'which', 'while',
            'who', 'who\'s', 'whom', 'why', 'why\'s', 'with', 'won\'t', 'would', 'wouldn\'t', 'you', 'you\'d', 'you\'ll', 'you\'re',
            'you\'ve', 'your', 'yours', 'yourself', 'yourselves'
        ];
    }

    private function stem($word)
    {
        // Basic stemmer function (you may need a more advanced one)
        return rtrim($word, 's');
    }

    public function build_dic($properties)
    {
        foreach ($properties as $i => $property) {
            $this->documents[$i] = preg_replace($this->pattern, '', $property->description);
        }
        // Debug: Log documents
        \Log::info('Documents:', $this->documents);
    }

    public function preprocess()
    {
        foreach ($this->documents as $d => $doc) {
            $tokens = preg_split('/\s+/', $doc);
            $tokens = array_filter($tokens, function($word) {
                return !in_array($word, $this->stopWords);
            });
            $tokens = array_map('strtolower', array_filter($tokens, 'ctype_alpha'));
            $tokens = array_map([$this, 'stem'], $tokens);
            $this->documents[$d] = $tokens;
        }
        // Debug: Log preprocessed documents
        \Log::info('Preprocessed Documents:', $this->documents);
    }

    public function create_inverted_index()
    {
        $inverted_index = [];

        foreach ($this->documents as $i => $text) {
            $freq = [];

            foreach ($text as $w) {
                if (!isset($freq[$w])) {
                    $freq[$w] = 0;
                }
                $freq[$w]++;
            }

            foreach ($freq as $w => $count) {
                if (!isset($inverted_index[$w])) {
                    $inverted_index[$w] = [];
                }
                $inverted_index[$w][$i] = $count;
            }
        }

        // Debug: Log inverted index
        \Log::info('Inverted Index:', $inverted_index);

        return $inverted_index;
    }

    public function search($query)
    {
        $inverted_index = $this->create_inverted_index();
        $query = preg_replace($this->pattern, '', $query);
        $query = array_filter(explode(' ', strtolower($query)), function($word) {
            return !in_array($word, $this->stopWords);
        });
        $query = array_map([$this, 'stem'], $query);
        $doc_scores = [];
        $result = null;
        $op = 'or';

        foreach ($query as $token) {
            if (in_array($token, ['and', 'or', 'not'])) {
                $op = $token;
                continue;
            }

            $term_set = isset($inverted_index[$token]) ? array_keys($inverted_index[$token]) : [];

            if ($op == 'and') {
                $result = $result ? array_intersect($result, $term_set) : $term_set;
            } elseif ($op == 'not') {
                $result = $result ? array_diff($result, $term_set) : [];
            } else {
                $result = $result ? array_merge($result, $term_set) : $term_set;
            }
        }

        if ($result) {
            foreach ($result as $doc_id) {
                $doc_scores[$doc_id] = 0;
                foreach ($query as $token) {
                    if (isset($inverted_index[$token][$doc_id])) {
                        $doc_scores[$doc_id] += $inverted_index[$token][$doc_id];
                    }
                }
            }
        }

        arsort($doc_scores);
        return array_keys($doc_scores);
    }
}
