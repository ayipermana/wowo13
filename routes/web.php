<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\AdminController;
use App\http\controllers\ProdukController;
use App\http\controllers\BrandaController;
use App\http\controllers\DetailController;





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
Route::get('/', function () {
    return view('login');

});

// Route::get('/', function () {
//     return view('welcome');

// });
Route::get('branda', function () {
    return view('branda');

});
Route::get('produk', function () {
    return view('produk');

})->middleware('auth:web');
// route::get('/branda',function(){
//     return view('branda');
// });



Route::get('admin',[AdminController::class,'show']);
    Route::get('admin/add',[AdminController::class,'add']);
    Route::post('admin/create',[AdminController::class,'create']);
    Route::get('admin/hapus/{id}',[AdminController::class,'hapus']);
    Route::get('admin/edit/{id}',[AdminController::class,'edit']);
    Route::post('admin/update/{id}',[AdminController::class,'update']);
    Route::get('admin/cari/',[AdminController::class,'search']);


    Route::get('produk',[ProdukController::class,'show']);
    Route::get('produk/add',[ProdukController::class,'add']);
    Route::post('produk/create',[ProdukController::class,'create']);
    Route::get('produk/hapus/{id}',[ProdukController::class,'hapus']);
    Route::get('produk/edit/{id}',[ProdukController::class,'edit']);
    Route::post('produk/update/{id}',[ProdukController::class,'update']);
    Route::get('produk/cari/',[ProdukController::class,'search']);

    Route::get('branda',[BrandaController::class,'show']);
    Route::get('detail{id}',[DetailController::class,'show']);




