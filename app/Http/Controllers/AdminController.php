<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
       public function showAdminLoginForm()
{
    return view('pages/adminlogin');
}

    public function adminlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect('/admin'); // Sesuaikan dengan URL tujuan setelah login berhasil
        }

        return redirect('/loginadmin')->with('error', 'Invalid credentials');

        
    }

    // Tambahkan metode lain sesuai kebutuhan
}
