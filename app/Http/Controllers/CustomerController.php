<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function profile()
    {
        $customer = Auth::guard('customer')->user();
        return view('front.customer-profile', compact('customer'));
    }
}
