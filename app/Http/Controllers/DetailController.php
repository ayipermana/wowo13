<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requestn;
use App\Models\produk;




class DetailController extends Controller
{
    function show($id){
        $data['detail']=produk::find($id);
        return view('detail', $data); 
    }
}

