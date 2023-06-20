<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function register(){
        return view('register_admin');
    }
    function create(request $request){
        $validate = $this->validate($request,[
               'name' => 'required|string',
               'email' => 'required|string|min:10',
               'password' => 'required_with::confirm_password|min:10|same:confirm_password',
            ]);
            $validate['password']=bcrypt($request->password);
            user::create($validate);
            return redirect('login/admin');
        }
        function show(){
            $data['admin']= user::all();
            return redirect('admin',$data);

        }
        function delete($id){
            user::where('id',$id)->delete();
            return redirect('admin');
        }
    }




