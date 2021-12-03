<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function indexR()
    {
        return view('auth.regis', [
            "title" => "Login",
            "active" => "login"
        ]);
    }
    public function regis(Request $request)
    {
        $create = $request->validate([
            "name" => "required|min:2",
            "email" => "required|email:dns",
            "password" => "required|min:3"

        ]);
        $create['password'] = Hash::clean($create['password']);
        User::create($create);
    }

    public function indexL()
    {
        return view('auth.login', [
            "title" => "Regis",
            "active" => "regis"
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
}
