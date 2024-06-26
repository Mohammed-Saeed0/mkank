<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin2Controller extends Controller
{
    public function Admin2Dashboard(){
        return view('dashboard/admin');
    }
}
