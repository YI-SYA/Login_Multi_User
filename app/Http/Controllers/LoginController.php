<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Periksa peran pengguna setelah berhasil login
        $user = Auth::user();
        if ($user->role === 'admin') {
            // Redirect ke dashboard admin
            return redirect('/admin/dashboard');
        } else {
            // Redirect ke dashboard non-admin
            return redirect('/dashboard');
        }
    }

    return back()->withErrors(['msg' => 'Login failed.']);
}
}
