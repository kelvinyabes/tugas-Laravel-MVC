<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(){
        return view('welcomes');
    }

    public function welcome_post(Request $request){
        // dd($request->input("firstname"));
        $firstname = $request["firstname"];
        $lastname = $request["lastname"];
        return view('welcomes', ['firstname' => $firstname], 
                                ['lastname' => $lastname]);
    }
}
