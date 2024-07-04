<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('front.properties.index', compact('properties'));
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
                'type' => 'required',
                'price' => 'required|numeric',
                'status' => 'required',
                'city' => 'required',
                'phone' => 'nullable|string',
                'primary_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // $property = new Property($request->except('primary_image'));

            // if ($request->hasFile('primary_image')) {
            //     $path = $request->file('primary_image')->store('property_images');
            //     $property->primary_image = $path;
            // }

            // $property->save();

            $property = new Property();
            $property->title = $request->title;
            $property->price = $request->price;
            $property->primary_image = $request->file('primary_image')->store('properties');
            $property->description = $request->description;
            $property->purpose = $request->purpose;
            $property->type = $request->type;
            $property->status = $request->status;
            $property->city = $request->city;
            $property->beds = $request->beds;
            $property->baths = $request->baths;
            $property->geo = $request->geo;
            $property->image = $request->file('image') ? $request->file('image')->store('properties') : null;
            $property->video = $request->video;
            $property->phone = $request->phone;

            // Set the company_id from the authenticated user
            $property->company_id = auth()->user()->id; // Adjust this line if needed

            $property->save();

            return redirect()->route('properties.index')->with('success', 'Property added successfully');
        }
    public function show(Property $property)
    {
        return view('front.properties.show', compact('property'));
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
            'primary_image' => 'nullable|image',
            'description' => 'nullable',
            'purpose' => 'required',
            'type' => 'required',
            'status' => 'required',
            'city' => 'required',
            'beds' => 'required|integer',
            'baths' => 'required|integer',
            'geo' => 'required|numeric',
            'image' => 'nullable|image',
            'video' => 'nullable|url',
            'phone' => 'nullable|string',
        ]);

        $property = Property::findOrFail($id);

        // Ensure that only the owner can update the property
        if ($property->company_id != auth()->user()->id) {
            return redirect()->route('properties.index')->with('error', 'Unauthorized action.');
        }

        $property->title = $request->title;
        $property->price = $request->price;

        if ($request->hasFile('primary_image')) {
            $property->primary_image = $request->file('primary_image')->store('properties');
        }

        $property->description = $request->description;
        $property->purpose = $request->purpose;
        $property->type = $request->type;
        $property->status = $request->status;
        $property->city = $request->city;
        $property->beds = $request->beds;
        $property->baths = $request->baths;
        $property->geo = $request->geo;

        if ($request->hasFile('image')) {
            $property->image = $request->file('image')->store('properties');
        }

        $property->video = $request->video;
        $property->phone = $request->phone;

        $property->save();

        return redirect()->route('properties.index')->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('front.properties.index')->with('success', 'Property deleted successfully.');
    }


    // public function allProperties(){
    //     return view('front.properties');
    // }

    // public function singleProperty(){
    //     return view('front.property');
    // }
}




