<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addHomeController extends Controller
{
   function addHomeForm(){
       return view('admin/addHome');
   }
}
