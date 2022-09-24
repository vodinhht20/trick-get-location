<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm(Request $request){
        return view('auth.login');
    }
    public function signUpForm(Request $request){
        return view('auth.signup');
    }
    public function resetPassForm(Request $request){
        return view('auth.resetPass');
    }
}
