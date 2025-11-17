<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginProses(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function registerProses(Request $request)
    {
        User::create([
            'username' => $request->username,
            'name'     => $request->name,
            'phone_number' => $request->phone_number,
            'email'    => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success','Akun berhasil dibuat');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }



}
