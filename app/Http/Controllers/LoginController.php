<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('authorization.login');
    }

    // login
    public function loginuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);
    
        if (Auth::attempt([
            'name' => $request->name,
            'password' => $request->password
        ])) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'user') {
                return redirect('/')->with('success', 'Login berhasil.');
            }
        }
    
        return back()->withInput($request->only('name'))->withErrors(['name' => 'Nama atau password salah']);
    }



    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login')->with('success', 'logout success ');
    }
   

}

