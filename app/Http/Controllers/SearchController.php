<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('query');
    Log::debug("Received query: $query");

    $response = Http::get('http://127.0.0.1:5001/search', [
        'query' => $query,
    ]);

    // Check HTTP status code
    $status = $response->status();
    if ($status !== 200) {
        Log::error("Non-successful status code: $status");
        return view('front.properties.search')->with('properties', [])->with('message', 'Error fetching properties.');
    }

    // Log the raw response body for debugging
    $responseBody = $response->body();
    Log::debug("Raw response body: " . $responseBody);

    // Attempt to decode JSON response with additional options
    $properties = json_decode($responseBody, true, 512, JSON_BIGINT_AS_STRING | JSON_INVALID_UTF8_IGNORE);

    // Check for JSON decoding errors
    if (json_last_error() !== JSON_ERROR_NONE) {
        Log::error("Error decoding JSON: " . json_last_error_msg());
        return view('front.properties.search')->with('properties', [])->with('message', 'Error decoding JSON response.');
    }

    // Handle empty properties array
    if (empty($properties)) {
        Log::debug("No properties found for query: $query");
        return view('front.properties.search')->with('properties', [])->with('message', 'No properties found.');
    }

    Log::debug("Search results: " . print_r($properties, true));

    return view('front.properties.search', compact('properties'));
}



}
