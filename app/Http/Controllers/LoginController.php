<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController  
{
    public function index()
    {
        return view('admin.admin-login', []);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin')
                ->with('success', 'Login berhasil! Selamat datang.');
        }

        return back()->with('error', 'Login gagal! Periksa kembali username dan password Anda.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/adminlogin')->with('info', 'Anda telah logout.');
    }

    public function register(Request $request)
    {
        // Tambahkan logika pendaftaran pengguna jika diperlukan.
    }
}
