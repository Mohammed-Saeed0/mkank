<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class HomeController extends Controller
{
    public function homePage(){
        $companies = Company::all(); // Fetch all companies from the database
        return view('front.site', ['companies' => $companies]);
        // return view('front.site');
    }

}
