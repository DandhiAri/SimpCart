<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function indexR()
    {
        return view('auth.regis', [
            "title" => "Regis",
            "active" => "regis"
        ]);
    }
    public function regis(Request $request)
    {
        $create = $request->validate([
            "name" => "required|min:2",
            "email" => "required|email:dns",
            "password" => "required|min:3",
            "address" => "required|min:10",
        ]);
        $create['password'] = Hash::make($create['password']);
        User::create($create);
        return redirect()->intended('/login');
    }

    public function indexL()
    {
        return view('auth.login', [
            "title" => "Login",
            "active" => "Login"
        ]);
    }
    public function login(Request $request)
    {
        $cred = $request->validate([
            "name" => "required",
            "password" => "required",
        ]);

        if (Auth::attempt($cred)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
