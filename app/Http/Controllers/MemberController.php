<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function register(){
        return view('register');
    }
    function create(request $request){
        $validate = $this->validate($request,[
               'name' => 'required|string',
               'email' => 'required|string|min:10',
               'password' => 'required_with::confirm_password|min:10|same:confirm_password',
            ]);
            $validate['password']=bcrypt($request->password);
            user::create($validate);
            return redirect('/');
        }
        function show(){
            $data['member']= user::all();
            return redirect('member',$data);

        }
        function delete($id){
            user::where('id_member',$id)->delete();
            return redirect('member');
        }
}
