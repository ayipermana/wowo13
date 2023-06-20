<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\produk;


class ProdukController extends Controller
{

    function show(){
        $data['produk']=produk::all();
        $data['cari']= "";
        return view('produk',$data); 
    }
    function add(){
        $data = [
            'action'=> url ('produk/create'),
            'tombol'=>'simpan',
            'produk'=>(object)[
              'harga'=>'',
                'nama'=>'',
                'deskripsi'=>'',
                'harga'=>'',
                
             ]
            ];
            return view ('form_produk',$data);
    }
    function create(Request $request){
        produk::create([
          'foto' => $request->file('foto')->store('foto'),
          'nama' => $request->nama,
          'deskripsi' =>$request->deskripsi,
          'harga' => $request->harga,
        ]);
return redirect('produk');
     
}
function hapus($id){
    produk::where('id',$id)->delete();
    return redirect('produk');
 }
 function edit($id){
    $data['produk']= produk::find($id);
    $data['action']= url('produk/update').'/'.$data['produk']->id;
    $data['tombol']= "update";

    return view('form_produk',$data);

 }
 function update( request $request){
    produk:: where('id',$request->id)->update([
        'nama'=> $request->nama,
        'deskripsi'=> $request->deskripsi,
        'harga'=> $request->harga,
         'foto'=> $request->file('foto')->store('foto')
]);
    return redirect('produk');
  }
  function search (request$request){
    $data['produk'] =produk:: where('nama','like',$request->cari."%")
    ->orWhere('nama','like',$request->cari."%")
    ->orWhere('id',$request->cari)
    ->paginate(2);
      $data['cari']= $request->cari;
  
  
    return view('produk',$data);
  }

    //
}
