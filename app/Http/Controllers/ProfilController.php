<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;

class ProfilController extends Controller
{
    //

   function show(){
   $profil=profil::first();
   if($profil){
      $data=[

         'nis'=> $profil->nis,
         'nama'=>$profil->nama,
         'ttl'=>$profil->ttl,
         'sekolah'=>$profil->sekolah,
         'jk'=> $profil->jk,
         'alamat'=>$profil->alamat,
         'foto'=>$profil->foto,
         'about'=>$profil->about,
         'action'=>'/profil/update/' .$profil->nis
      ];
      return view('from_profil',$data);
   }else{
      $data=[

         'nis'=> '',
         'nama'=>'',
         'ttl'=>',',
         'sekolah'=> '',
         'jk'=> '',
         'alamat'=> '',
         'foto'=>'',
         'about'=>'',
         'action'=>'/profil/create/'
      ];
      return view('from_profil',$data);


   }
      
 }

     function create( request $request){
$validate=$this->validate($request,[
   'nis'=> 'required|numeric',
   'nama'=> 'required|string',
   'ttl'=> 'string',
   'sekolah'=> '',
   'jk'=> 'required|string',
   'alamat'=>'required|string|',
   'foto'=>'required|mimes:jpg,png',
   'about'=>'required'

     
]);
$namaFile = $request->nama.".".$request->file('foto')->getClientOriginalExtension();
$validate['foto']=$request->file('foto')->storeAs('foto',$namaFile);
profil::create( $validate);
return redirect('profil');
     }
     function hapus($id){
      profil::where('nis',$id)->delete();
      return redirect('profil');
   }
   function edit($id){
      $data['profil']= profil::find($id);
      $data['action']= url('profil/update').'/'.$data['profil']->nis;
      $data['tombol']= "update";

      return view('from_profil',$data);
  
   }

   function update( request $req){
 $data = profil::where('nis',$req->nis)->first();
 if ($req->foto == ''){
   $foto= $data->foto; 
 }else{
   $foto = $req->file('foto')->store('foto');

 }




     profil:: where('nis',$request->id)->update([
      'nis'=> $request->nis,
      'nama'=> $request->nama,
      'ttl'=> $request->ttl,
      'sekolah'=> $request->sekolah,
      'jk'=> $request->jk,
      'alamat'=> $request->alamat,
      'about'=> $request->about,


     ]);
     return redirect('profil');
   }
function search (request$request){
  $data['profil'] =profil:: where('nis','like',$request->cari."%")
  ->orWhere('nama','like',$request->cari."%")
  ->orWhere('jk',$request->cari)
  ->paginate(2);
    $data['cari']= $request->cari;


  return view('profil',$data);
}
   }