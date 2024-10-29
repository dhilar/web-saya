<?php

namespace App\Http\Controllers;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Metode untuk menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Metode untuk menangani registrasi
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Menyimpan user baru dengan hash password
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }

    // Metode untuk menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Metode untuk menangani login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Cek kredensial untuk autentikasi
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika login berhasil, redirect ke halaman admin
            return redirect()->intended('/admin')->with('success', 'Login successful!');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
    }

    // Metode untuk menangani logout
    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}
}
