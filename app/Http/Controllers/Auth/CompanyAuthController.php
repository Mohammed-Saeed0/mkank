<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.company-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:companies',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'postal_number' => 'nullable|string|max:255',
            'tax_card' => 'nullable|string|max:255',
            'company_description' => 'nullable|string',
            'company_location' => 'nullable|string|max:255',
        ]);

        // Handle the logo upload
        if ($request->hasFile('logo')) {
            $file_extension = $request->logo->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/companies';
            $request->logo->move(public_path($path), $file_name);
            $logo_url = $path . '/' . $file_name;
        }

        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'logo' => $logo_url,
            'postal_number' => $request->postal_number,
            'tax_card' => $request->tax_card,
            'company_description' => $request->company_description,
            'company_location' => $request->company_location,
        ]);

        Auth::guard('company')->login($company);

        return redirect()->route('properties.create');
    }


    public function showLoginForm()
    {
        return view('auth.company-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);


        if (Auth::guard('company')->attempt($request->only('email', 'password'))) {
            return redirect()->route('homepage');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // public function logout()
    // {
    //     Auth::guard('company')->logout();
    //     return redirect('homepage');
    // }
    public function logout(Request $request)
    {
        Auth::guard('company')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('homepage');
    }
}

