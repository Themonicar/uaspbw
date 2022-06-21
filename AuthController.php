<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\support\Facades\Auth;

class AuthController extends Controller
{
    //sign up
    public function signup(){
        return view('signup');   
    }
    public function createuser(Request $request){
        $user = User::create([
            'nama_user' => $request -> nama_user,
            'username' => $request -> username,
            'password' => md5($request -> password)
        ]);
        return view('/login');
    }
    //login
    public function login(){
        return view('login');
    }
    public function ceklogin(Request $request){
        $user = User::where('username', $request->username)->where('password', md5($request->password))->first();
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        Auth::login($user);
        return redirect('/dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login')->with('logout', 'Anda Berhasil Logout');
    }
}
