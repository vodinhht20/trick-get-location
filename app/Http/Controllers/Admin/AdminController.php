<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request){
        return view('cpanel.dashboard');
    }
    public function historyPay(Request $request){
        return view('cpanel.historypay');
    }

    public function test()
    {
        return view("cpanel.test");
    }
}
