<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('walcome');
});

Route::post('/login', [AuthController::class, 'tampil_login']);
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', function () {
    return 'ini halaman register';
});

Route::get('/home', function () {
    return 'ini halaman home';
});

Route::get('/admin', function () {
    return 'ini halaman admin';
});