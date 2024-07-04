<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PropertyController;

use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\Auth\CompanyAuthController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;


use App\Http\Controllers\Admin2Controller;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('front.site');
// });

Route::get('/123', function () {
    return view('dashboard.admin');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
Route::get('/company/login', function () {
    return view('auth.company-login');
});
Route::get('/company/register', function () {
    return view('auth.company-register');
});
Route::get('/customer/login', function () {
    return view('auth.customer-login');
});
Route::get('/customer/register', function () {
    return view('auth.customer-register');
});

Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
Route::get('/admin2/dashboard2', [Admin2Controller::class, 'Admin2Dashboard'])->name('admin2.dashboard2');

Route::get('/', [HomeController::class, 'homePage'])->name('homepage');
Route::get('/about', [AboutController::class, 'aboutPage']);
Route::get('/faq', [FaqController::class, 'faq']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/companies', [CompanyController::class, 'allCompanies']);

// Route::get('/properties', [PropertyController::class, 'index'])->name('property.index');
// Route::get('/properties', [PropertyController::class, 'allProperties']);

Route::get('/company/submit', [CompanyController::class, 'submitProperty'])->name('company.submit')->middleware('company');






// Route::get('/property/{id}', [PropertyController::class, 'singleProperty']);
// Route::get('/property/{id}', [PropertyController::class, 'show']);
// Route::resource('properties', PropertyController::class);



// login and register route

Route::get('customer/register1', [CustomerAuthController::class, 'showRegisterForm'])->name('customer.register');
Route::post('customer/register', [CustomerAuthController::class, 'register'])-> name('customer.store');
Route::get('customer/login', [CustomerAuthController::class, 'showLoginForm'])->name('customer.login');
Route::post('customer/login', [CustomerAuthController::class, 'login'])->name('customer.login-check');
// Route::post('customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');

Route::get('company/register', [CompanyAuthController::class, 'showRegisterForm'])->name('company.register');
Route::post('company/register', [CompanyAuthController::class, 'register'])->name('company.store');
Route::get('company/login', [CompanyAuthController::class, 'showLoginForm'])->name('company.login');
Route::post('company/login', [CompanyAuthController::class, 'login'])->name('company.login-check');
// Route::post('company/logout', [CompanyAuthController::class, 'logout'])->name('company.logout');

Route::get('/customer/profile', [CustomerController::class, 'profile'])->name('customer.profile')->middleware('customer');
Route::get('/company/profile', [CompanyController::class, 'profile'])->name('company.profile')->middleware('company');

Route::get('/company/{id}', [CompanyController::class, 'singleCompany']);



Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:customer')->group(function () {
    Route::get('/customer/dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');
});

// Route::middleware('auth.company')->group(function () {
//     Route::get('/company/dashboard', function () {
//         return view('company.dashboard');
//     })->name('company.dashboard');
//     Route::get('/company/properties/create', [PropertyController::class, 'create'])->name('properties.create');
//     Route::post('/company/properties', [PropertyController::class, 'store'])->name('properties.store');
// });



Route::middleware('auth:company')->group(function () {
    Route::get('properties/create', [PropertyController::class, 'create'])->name('properties.create');
    Route::post('properties', [PropertyController::class, 'store'])->name('properties.store');
    Route::get('properties/{property}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
    Route::put('properties/{property}', [PropertyController::class, 'update'])->name('properties.update');
    Route::delete('properties/{property}', [PropertyController::class, 'destroy'])->name('properties.destroy');
});

Route::get('properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('properties/{property}', [PropertyController::class, 'show'])->name('properties.show');


// Route::middleware('auth.admin')->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
//     Route::resource('admin/properties', PropertyController::class);
//     Route::resource('admin/users', UserController::class);
//     Route::resource('admin/companies', CompanyController::class);
// });


Route::post('/customer/logout', [App\Http\Controllers\Auth\CustomerAuthController::class, 'logout'])->name('customer.logout');
Route::post('/company/logout', [App\Http\Controllers\Auth\CompanyAuthController::class, 'logout'])->name('company.logout');


