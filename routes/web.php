<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\HomeController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[HomeController::class,'show']);

Route::get('login', function () {
    return view('login');
})->name('login');
Route::post('login/auth',[UserController::class,'auth']);
Route::get('logout',[UserController::class,'logout']);

// Route::get('template',[TemplateController::class,'template'])->middleware('auth');
    Route::get('template', function (){
        return view('template');
    });

    Route::get('profil',[ProfilController::class,'show']);
    Route::get('profil/add',[ProfilController::class,'add']);
    Route::post('profil/create',[ProfilController::class,'create']);
    Route::get('profil/hapus/{id}',[ProfilController::class,'hapus']);
    Route::get('profil/edit/{id}',[ProfilController::class,'edit']);
    Route::post('profil/update/{id}',[ProfilController::class,'update']);
    Route::get('profil/cari/',[ProfilController::class,'search']);
    
    Route::get('portofolio',[PortofolioController::class,'show']);
    Route::get('portofolio/add',[PortofolioController::class,'add']);
    Route::post('portofolio/create',[PortofolioController::class,'create']);
    Route::get('portofolio/hapus/{id}',[PortofolioController::class,'hapus']);
    Route::get('portofolio/edit/{id}',[PortofolioController::class,'edit']);
    Route::post('portofolio/update/{id}',[PortofolioController::class,'update']);
    Route::get('portofolio/cari/',[PortofolioController::class,'search']);