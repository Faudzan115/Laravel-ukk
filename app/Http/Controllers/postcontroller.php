<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Metode lainnya...

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|username',
            'password' => 'required',
        ]);

        // Coba melakukan login
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            return redirect()->intended('/home'); // Ganti '/dashboard' dengan URL yang sesuai
        }

        // Jika login gagal
        return back()->withErrors(['username' => 'username atau kata sandi salah'])->withInput();
    }
}
