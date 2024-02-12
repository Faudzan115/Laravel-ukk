<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;





class LoginController extends Controller
{
    function login(){
        return view('/login');
    }

    function home()
    {
        $produk = DB::table('produk')->get(); // sesuaikan dengan model dan query yang sesuai
        return view('/home',['produk'=> $produk]);
    }

    public function register()
    {
        return view('/register');
    }

    function proses_tambah_petugas(Request $request)
    {
        $nama_admin = $request->nama_admin;
        $username = $request->username;
        $password = $request->password;
        $level = $request->level;

        DB::table('user')->insert([

            'nama_admin' => $nama_admin,
            'username' => $username,
            'password' => Hash::make($password),
            'level' => $level,
        ]);

        return redirect('/login');
    }
    function logout(){
        Auth::guard('admin')->logout();

        return redirect('/login/admin');

    function login (Request $request){
        if (Auth::attempt($request->only("username","password"))) {
            return redirect('/home');
        }else{
            return  view('/login')->with("salah","username atau password salah");
    }
    }
        }


    }



