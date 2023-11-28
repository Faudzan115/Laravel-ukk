<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function tampilan_admin(){
        return view("home-admin");
    }

    function index(){
        return view("login-admin");
    }

    function login(Request $request){
        $datalogin = $request->only("username","password");
        if (Auth::guard("login")->attempt($datalogin)) {
            return redirect('/tampilan/admin');
        }else{
            return redirect('/login/admin')->with("salah","username atau password salah");
        }
    }

}