<?php

/*
    NIM  : 11S20020
    Nama : Roosen Gabriel Manurung 
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('welcomming');
});

Route::get('/', function(){
    return view('welcomming');
});

Route::controller(MahasiswaController::class)->group(function(){
    Route::get('/mahasiswa/form-mahasiswa', 'input');
    Route::post('/mahasiswa/form-hasil', 'proses');
});


//CRUD BUKU
Route::resource('tambah-buku', BukuController::class);

Route::controller(BukuController::class)->group(function(){
    Route::get('/buku/tambah-buku', 'simpanBuku');
    Route::post('/buku', 'store');
    Route::get('/buku', 'index');
    Route::get('/buku/{buku_id}', 'show');
    Route::get('/buku/{buku_id}/edit', 'edit');
    Route::put('/buku/{buku_id}', 'update');
    Route::delete('/buku/{buku_id}', 'destroy');
});