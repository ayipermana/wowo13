<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;


class PortofolioController extends Controller
{
    //

    function show(){
     $data['portofolio']= Portofolio::paginate(5);
     $data['cari']="";
     return view('portofolio',$data);
 }
 
    function add(){
       $data =[
         'action'=> url('portofolio/create'),
         'tombol'=>'simpan',
         'portofolio' => (object)[
            'nama_portofolio'=> '',
            'kategori'=>'',
            'deskripsi'=>',',
            'foto'=>'',
            
         ]
         ];
         return view('from_portofolio',$data);
 
    }
     function create( request $request){
$validate=$this->validate($request,[
   'nama_portofolio'=> 'required|string',
   'kategori'=> 'string',
   'deskripsi'=> 'string',
    'foto'=>'required|mimes:jpg,png',
    
   

     
]);
$namaFile = $request->nama_portofolio.".".$request->file('foto')->getClientOriginalExtension();
$validate['foto']=$request->file('foto')->storeAs('foto',$namaFile);
Portofolio::create( $validate);
return redirect('portofolio');
     }
     function hapus($id){
      Portofolio::where('id',$id)->delete();
      return redirect('portofolio');
   }
   function edit($id){
      $data['portofolio']= Portofolio::find($id);
      $data['action']= url('portofolio/update').'/'.$data['portofolio']->id;
      $data['tombol']= "update";

      return view('from_portofolio',$data);

   }

   function update( request $request){
     Portofolio:: where('id',$request->id)->update([
      'nama_portofolio'=> $request->nama_portofolio,
      'kategori'=> $request->kategori,
      'deskripsi'=> $request->deskripsi,
     


     ]);
     return redirect('portofolio');
   }
function search (request$request){
  $data['portofolio'] =Portofolio:: where('nama_portofolio','like',$request->cari."%")
  ->orWhere('nama_portofolio','like',$request->cari."%")
  ->orWhere('deskripsi',$request->cari)
  ->paginate(2);
    $data['cari']= $request->cari;


  return view('portofolio',$data);
}
   }
