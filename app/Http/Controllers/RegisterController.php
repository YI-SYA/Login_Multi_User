<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'username' => 'required|unique:login|max:255',
            'password' => 'required|min:5',
        ]);

        // Simpan data pengguna ke dalam tabel "login"
        DB::table('login')->insert([
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
            'role' => $request->input('role'),
        ]);

        // Redirect ke halaman setelah pendaftaran berhasil
        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
