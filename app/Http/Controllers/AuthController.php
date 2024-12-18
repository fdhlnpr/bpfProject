<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Metode untuk registrasi
    public function register(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Buat pengguna baru
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password), // Hash password
    ]);

    // Login pengguna setelah registrasi
    Auth::login($user);

    // Redirect ke halaman yang sesuai
    return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.'); // Ganti dengan route yang sesuai
}

    // Metode untuk login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // Jika login berhasil, alihkan ke halaman beranda
        return redirect()->route('beranda'); // Ganti dengan nama route yang sesuai untuk halaman beranda
    }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Metode untuk logout
    public function logout(Request $request)
{
    Auth::logout();
    return redirect('/login');
}
}