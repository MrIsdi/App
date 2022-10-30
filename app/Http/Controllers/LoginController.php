<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view("layouts.login");
    }

    public function register(){
        return view("layouts.register");
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password2' => 'required'
        ]);

        if($request->password != $request->password2){
            return redirect()->route("register");
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route("login");
    }

    public function autheticate(Request $request){
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email,'password' => $request->password,'role' => 'admin'])){
            $request->session()->regenerate();
            return redirect()->route('dashboard-admin');
        }else if(Auth::attempt(['email' => $request->email,'password' => $request->password,'role' => 'user'])){
            $request->session()->regenerate();
            return redirect()->route('dashboard-user');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("login");
    }
}
