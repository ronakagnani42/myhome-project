<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminDashboard extends Controller
{
    function dashboard(){
        return view('admin/dashboard');
    }

}
