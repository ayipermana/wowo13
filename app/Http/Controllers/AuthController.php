<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }
    function login_admin(){
        return view ('login_admin'); 
    }
    function auth(request $req){
        $credentials = $req->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);
        if (auth::guard('member')->attempt( $credentials)){
            $req->session()->regenerate();
            return redirect('branda');
        }
        return redirect('/');
    }
    function logout(){
        auth::logout();
        return redirect('/');
    }
    function logout_admin(){
        auth::logout();
        return redirect('login/admin');
    }




        
}
