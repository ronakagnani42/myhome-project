<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addHome;
use Illuminate\Support\Facades\DB;
class addHomeController extends Controller
{
   function addHomeForm(Request $req){
        $addHome=DB::table('newhomes');
        $addHome ->house_flat_number = $req->house_flat_number;
        $addHome ->address_line1 = $req->address_line1;
        $addHome ->address_line2 = $req->address_line2;
        $addHome ->area = $req->area;
        $addHome ->city = $req->city;
        $addHome ->buyORrent = $req->buyORrent;
        $addHome ->price = $req->price;
        $addHome ->bhk = $req->bhk;
        $addHome ->door_facing = $req->door_facing;
        $result=$addHome->save();
        if($result){
            echo"Success";
        }
        else{
            echo"Failed";
        }
   }
}
