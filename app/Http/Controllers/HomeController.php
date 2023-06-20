<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\Portofolio;

class HomeController extends Controller
{
    //
    function show(){
        $data['profil']=profil::first();
        $data['portofolio']=portofolio::all();
        return view ('welcome',$data);
    }
}
