<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
    function auth(request $request){
        $credentials = $request->only('email','password');
        if(auth::attempt($credentials)){
            return redirect()->intended('template');
        }
        return redirect()->back();
        }
        function logout(Request $request){
            auth::logout();
            return redirect('login');
        }
}
