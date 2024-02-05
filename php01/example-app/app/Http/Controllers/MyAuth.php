<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyAuth extends Controller
{
    function login_view(){
        return view('login')
    }
    function login_process(Request $req){

    }

    function logout_process(){

    }

    function register_view(){
        return view('register')
    }
    function register_process(Request $request)

}
