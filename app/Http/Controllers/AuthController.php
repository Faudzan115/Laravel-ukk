<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\petugas;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    function logout(){

        Session::flush();
        Auth::logout();
}
    function tampilan_home(){
        return view("home");
    }
        function login(){
            return view('/login');
        }
        function tampil_register(){
            return view('/register');
        }
        function penjualan(){
            return view('/penjualan');
        }
        function detail_penjualan(){
            return view('/detail_penjualan');
        }
        function tampil_stok(){
            return view("stok");
        }
        function data_produk(){
            return view("data_produk");
        }
        function data_pelanggan(){
            return view("data_pelanggan");
        }
        function produk(){
            return view("produk");
        }
    }

