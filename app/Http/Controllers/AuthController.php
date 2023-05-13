<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = pengguna::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'Email tidak ditemukan',
            ]);
        }

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'password' => 'Password salah',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('admin.homeadmin');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
