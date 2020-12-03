<?php

namespace App\Http\Controllers;

use Illuminate\Http\req;

use Illuminate\Support\Facades\DB;


use App\Models\Freelancer;

class UserLogin extends Controller
{ 
    //
    function check(req $req)
    {
        $email = $req -> usermail;
        $pwd = $req -> userpwd;

        // $s= "select freelancers.email, freelancers.password from freelancers where email = `$email` && password= `$pwd`";

        // $arr = DB::select($s);

        
        
        // return view("signin", ["users" => $arr]);


        $data = Freelancer::all();


        $this->validate($req, [
        'email'           => 'required|max:255|email',
        'password'           => 'required|confirmed',
    ]);
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        // Success
        return redirect()->intended('/panel');
    } else {
        // Go back on error (or do what you want)
        return redirect()->back();
    }


        foreach($data as $user) {
            if($user->usermail == $email && $user->userpwd == $pwd) {
                return view("welcome");
            }
        }


        return view('viewResult', ['members' => $data]);
        
        
        
    }
}
