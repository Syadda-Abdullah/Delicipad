<?php

namespace App\Http\Controllers;

//app/Http/Controllers/AuthController.php;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('pages/register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'level' => 'user', // sesuaikan dengan kebutuhan Anda
        ]);

        return redirect('/login')->with('success', 'Account created successfully!');
    }

    public function showLoginForm()
{
    return view('pages/login');
}

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect('/'); // Sesuaikan dengan URL tujuan setelah login berhasil
        }

        return redirect('/login')->with('error', 'Invalid credentials');
    }
}

