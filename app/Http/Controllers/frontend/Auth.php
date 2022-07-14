<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Auth extends Controller
{
    function login_index(){
        return view('frontend.login');
    }
    function register_index(){
        return view('frontend.register');
    }
    function forgot_pass_index(){
        return view('frontend.forgotpassword');
    }


}
