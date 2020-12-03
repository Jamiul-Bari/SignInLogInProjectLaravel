<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Freelancer;

class UserController extends Controller
{
    //
    function addData(Request $req)
    {
        $freelancer = new Freelancer;

        // $freelancer -> id = 1;
        $freelancer -> first_name = $req -> first_name;
        $freelancer -> last_name = $req -> last_name;

        $freelancer -> email = $req -> email;

        $freelancer -> phone = $req -> phone;

        $freelancer -> password = $req -> password;

        $freelancer -> gender = $req -> gender;

        $freelancer -> dob = $req -> dob;

        $freelancer -> save();

        return redirect("signup");

    }
}
