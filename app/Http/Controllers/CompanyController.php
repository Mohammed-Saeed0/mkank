<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{

    public function profile()
    {
        $company = Auth::guard('company')->user();
        return view('front.company-profile', compact('company'));
    }

    public function allCompanies(){
        return view('front.companies');
    }

    public function singleCompany(){
        return view('front.company');
    }

    public function submitProperty(){
        return view('front.submitProperty');
    }
}
