<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function loginProses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Jika admin → masuk dashboard admin
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            // Jika user biasa → masuk dashboard user
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Username atau password salah!');
    }


    public function registerProses(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'role'     => 'user'
        ]);

        return redirect()->route('login')->with('success', 'Register berhasil, silakan login.');
    }

    public function profile()
    {
        $user = auth()->user(); // ambil data user login saat ini
        return view('profile', compact('user'));
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
