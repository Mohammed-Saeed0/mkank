<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Property;
use Illuminate\Support\Facades\Log; // Add this import
use App\Models\PropertyImage;
use App\Services\DocumentSearchEngine;


class PropertyController extends Controller
{
    // public function index()
    // {
    //     $properties = Property::all();
    //     return view('front.properties.index', compact('properties'));
    // }

        public function index(Request $request)
    {
        // Get the number of items per page from the request, default to 12 if not provided
        $perPage = $request->input('per_page', 12);

        // Retrieve the properties with pagination
        $properties = Property::paginate($perPage);

        // Return the view with the paginated properties
        return view('front.properties.index', ['properties' => $properties]);
    }

    public function create()
    {
        return view('front.properties.create');
    }

    public function store(Request $request)
        {
            $request->validate([
                'title' => 'required',
                'purpose' => 'required',
                'description' => 'required',
                'type' => 'required',
                'price' => 'required|numeric',
                'status' => 'required',
                'city' => 'required',
                'phone' => 'nullable|string',
                'primary_image' => 'required|nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $file_extension = $request->primary_image->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/properties';
            $request->primary_image->move(public_path($path), $file_name);



            $property = new Property();
            $property->title = $request->title;
            $property->price = $request->price;
            $property->primary_image = $file_name;
            $property->description = $request->description;
            $property->purpose = $request->purpose;
            $property->type = $request->type;
            $property->status = $request->status;
            $property->city = $request->city;
            $property->beds = $request->beds;
            $property->baths = $request->baths;
            $property->geo = $request->geo;
            $property->video = $request->video;
            $property->phone = $request->phone;

                 // Set the company_id from the authenticated user
            // Set the company_id from the authenticated company user
            if (auth()->guard('company')->check()) {
                $property->company_id = auth()->guard('company')->user()->id;
            } else {
                return redirect()->back()->withErrors(['error' => 'Company user not authenticated']);
            }
                 $property->save();

            // Handle multiple additional images upload
            if ($request->hasfile('images')) {
                foreach ($request->file('images') as $image) {
                    $image_extension = $image->getClientOriginalExtension();
                    $image_name = time() . '-' . uniqid() . '.' . $image_extension;
                    $image->move(public_path($path), $image_name);

                    // Save each image in the property_images table
                    PropertyImage::create([
                        'property_id' => $property->id,
                        'image_path' => $image_name,
                    ]);
                }
            }



            return redirect()->route('properties.index')->with('success', 'Property added successfully');
        }
        public function show($id)
        {
            // Assuming $id is the property_id
            $property = Property::findOrFail($id); // Adjust model as per your implementation

            // Make HTTP request to Flask server
            $response = Http::get('http://127.0.0.1:5000/api/find_similar_properties', [
                'property_id' => $id,
            ]);

            $similarProperties = $response->json();

            // Return view with property and similar properties data
            return view('front.properties.show', [
                'property' => $property,
                'similarProperties' => $similarProperties,
            ]);
        }

    public function edit(Property $property)
    {
        return view('front.properties.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'primary_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'purpose' => 'required',
            'type' => 'required',
            'status' => 'required',
            'city' => 'required',
            'beds' => 'required|integer',
            'baths' => 'required|integer',
            'geo' => 'required|numeric',
            'video' => 'nullable|url',
            'phone' => 'nullable|string',
        ]);

        $property = Property::findOrFail($id);

        // Ensure that only the owner can update the property


        $property->title = $request->title;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->purpose = $request->purpose;
        $property->type = $request->type;
        $property->status = $request->status;
        $property->city = $request->city;
        $property->beds = $request->beds;
        $property->baths = $request->baths;
        $property->geo = $request->geo;

        // Handle the primary image upload if exists
        if ($request->hasFile('primary_image')) {
            // Delete the old image if it exists
            if ($property->primary_image) {
                $oldImagePath = public_path('images/properties/' . $property->primary_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

        $file_extension = $request->primary_image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images/properties';
        $request->primary_image->move(public_path($path), $file_name);
        $property->primary_image = $file_name;
    }

        $property->video = $request->video;
        $property->phone = $request->phone;

            // Set the company_id from the authenticated company user
        if (auth()->guard('company')->check()) {
            $property->company_id = auth()->guard('company')->user()->id;
        } else {
            return redirect()->back()->withErrors(['error' => 'Company user not authenticated']);
        }

        $property->save();

            // Handle multiple additional images upload if exists
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $image_extension = $image->getClientOriginalExtension();
                $image_name = time() . '-' . uniqid() . '.' . $image_extension;
                $image->move(public_path($path), $image_name);

                // Save each image in the property_images table
                PropertyImage::create([
                    'property_id' => $property->id,
                    'image' => $image_name
                ]);
            }
        }

        return redirect()->route('properties.index')->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('front.properties.index')->with('success', 'Property deleted successfully.');
    }
    public function search(Request $request)
{
    $query = Property::query();

    if ($request->filled('status')) {
        $query->where('status', $request->status);
    }
    if ($request->filled('city')) {
        $query->where('city', $request->city);
    }
    if ($request->filled('purpose')) {
        $query->where('purpose', $request->purpose);
    }
    if ($request->filled('beds')) {
        $query->where('beds', $request->beds);
    }
    if ($request->filled('baths')) {
        $query->where('baths', $request->baths);
    }
    if ($request->filled('geo')) {
        $query->where('geo', '>=', $request->geo);
    }
    if ($request->filled('min_price')) {
        $query->where('price', '>=', $request->min_price);
    }
    if ($request->filled('max_price')) {
        $query->where('price', '<=', $request->max_price);
    }

    $properties = $query->paginate(9);

    return view('front.properties.filter', compact('properties'));
}


    // public function search(Request $request)
    // {
    //     $searchTerm = $request->input('query');

    //     $properties = Property::all();
    //     $searchEngine = new DocumentSearchEngine();

    //     // Build the documents and preprocess them
    //     $searchEngine->build_dic($properties);
    //     $searchEngine->preprocess();

    //     // Get the search results
    //     $resultIds = $searchEngine->search($searchTerm);

    //     // Retrieve properties based on the search results
    //     $results = Property::whereIn('id', $resultIds)->paginate(9);

    //     // Render the search results view
    //     return view('front.properties.search', ['properties' => $results]);
    // }

    // public function allProperties(){
    //     return view('front.properties');
    // }

    // public function singleProperty(){
    //     return view('front.property');
    // }
}




