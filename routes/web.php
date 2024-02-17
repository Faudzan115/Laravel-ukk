<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('walcome');
});

// home
Route::get('/home',[AuthController::class,'tampilan_home',]);
// login
Route::post('/login', [AuthController::class, 'tampil_login']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
// logout
Route::get('/logout', [AuthController::class, 'login']);
// register
Route::get('/register', [AuthController::class, 'tampil_register', ]);
// penjualan
Route::get('/detail_penjualan',[AuthController::class,'detail_penjualan',]);
Route::get('/penjualan', [AuthController::class, 'penjualan', ]);
// produk
Route::get('/produk', [AuthController::class, 'produk', ]);
Route::get('/data_produk', [AuthController::class, 'data_produk', ]);
Route::get('/stok', [AuthController::class, 'tampil_stok', ]);
// data pelanggan
Route::get('/data_pelanggan', [AuthController::class, 'data_pelanggan', ]);




