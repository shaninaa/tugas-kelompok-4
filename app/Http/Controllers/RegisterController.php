<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth-register');
    }

    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama_depan' => 'required|max:255',
                'nama_belakang' => 'required|max:255',
                'email' => 'required|email|unique:pengguna,email|max:255',
                'password' => 'required|min:4|confirmed',
                'agree' => ['required', 'accepted'],
            ], [
                'nama_depan.required' => 'Nama depan harus diisi.',
                'nama_belakang.required' => 'Nama belakang harus diisi.',
                'email.required' => 'Email harus diisi.',
                'email.email' => 'Format email tidak valid.',
                'email.unique' => 'Email sudah terdaftar.',
                'password.required' => 'Password harus diisi.',
                'password.min' => 'Password minimal 8 karakter.',
                'password.confirmed' => 'Konfirmasi password tidak sesuai.',
                'agree.accepted' => 'Anda harus menyetujui syarat dan ketentuan.',
            ]);

            $user = pengguna::create([
                'id_akses' => 1, 
                'nama_pengguna' => $validatedData['nama_depan'].' '.$validatedData['nama_belakang'],
                'nama_depan' => $validatedData['nama_depan'],
                'nama_belakang' => $validatedData['nama_belakang'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);

            auth()->login($user);

            return redirect()->route('admin.homeadmin');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }
}
