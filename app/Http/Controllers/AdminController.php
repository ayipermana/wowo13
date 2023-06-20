<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\admin;


class AdminController extends Controller
{
    //
    function show(){
      $data['admin']=admin::all();
        
        $data['cari']= "";
        return view('admin',$data); 
    }
    function add(){
        $data = [
            'action'=> url ('admin/create'),
            'tombol'=>'simpan',
            'admin'=>(object)[
                'type_user'=>'',
                'nama'=>'',
                'email'=>'',
                'password'=>'',
                'no_tlp'=>'',
                'alamat'=>'',
             ]
            ];
            return view ('form_admin',$data);
    }
    function create(Request $request){
        $validate = $this->validate($request,[
            'type_user' =>'required',
            'nama' => 'required|string|max:10',
            'email' => 'required',
            'password' => 'required',
            'no_tlp' => 'numeric',
            'foto' => 'required|mimes:jpg,png',
            'alamat' => 'required|string|min:5',  
        ]);
        $namaFile = $request->id.".".$request->file('foto')->getClientOriginalExtension();
$validate['foto']=$request->file('foto')->storeAs('foto',$namaFile);
admin::create($validate);
return redirect('admin');
     
}
function hapus($id){
    admin::where('id',$id)->delete();
    return redirect('admin');
 }
 function edit($id){
    $data['admin']= Admin::find($id);
    $data['action']= url('admin/update').'/'.$data['admin']->id;
    $data['tombol']= "update";

    return view('form_admin',$data);

 }
 function update( request $request){
    admin:: where('id',$request->id)->update([
        'nama'=> $request->nama,
        'email'=> $request->email,
     'password'=> $request->password,

     'no_tlp'=> $request->no_tlp,
     'alamat'=> $request->alamat,
     'foto'=> $request->file('foto')->store('foto')
]);
    return redirect('admin');
  }
  function search (request$request){
    $data['admin'] =Admin:: where('nama','like',$request->cari."%")
    ->orWhere('nama','like',$request->cari."%")
    ->orWhere('id',$request->cari)
    ->paginate(2);
      $data['cari']= $request->cari;
  
  
    return view('admin',$data);
  }









}
