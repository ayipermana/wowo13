<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class BrandaController extends Controller
{
    function show(){
        $data['branda']=produk::all();
        return view('branda',$data); 
    }
}
