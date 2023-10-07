<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        // Mengambil data email dan password dari inputan user
        $credentials = $request->only(['email', 'password']);

        // Mengecek apakah data sesuai dengan yang ada di database, jika sesuai arahkan ke dashboard, jika tidak kembali ke halaman login
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return back();
        }
    }
}
