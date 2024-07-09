<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Property;



class CompanyController extends Controller
{

    public function profile()
    {
        $company = Auth::guard('company')->user();
        return view('front.company-profile', compact('company'));
    }

    public function index()
{
    $companies = Company::withCount('properties')->get();
    return view('front.companies.index', compact('companies'));
}
    // public function allCompanies(){
    //     return view('front.companies');
    // }

    // public function singleCompany(){
    //     return view('front.company');
    // }
    public function show($id)
    {
        // Retrieve the company details
        $company = Company::findOrFail($id);

        // Retrieve the properties associated with the company
        $properties = Property::where('company_id', $company->id)->paginate(12);

        return view('front.companies.show', [
            'company' => $company,
            'properties' => $properties,
        ]);
    }

    // public function submitProperty(){
    //     return view('front.submitProperty');
    // }
}
