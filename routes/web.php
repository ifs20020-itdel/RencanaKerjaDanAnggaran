<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JenisPenggunaanController;
use App\Http\Controllers\JPKemahasiswaanController;
use App\Http\Controllers\JPPenelitianController;
use App\Http\Controllers\JPPkMController;
use App\Http\Controllers\InvestasiSDMController;
use App\Http\Controllers\InvestasiSaranaController;
use App\Http\Controllers\InvestasiPrasaranaController;

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
Route::middleware('guest')->group(function(){
    Route::post('/login/auth', [LoginController::class, 'login']);

    Route::get('/user/login', function() {
        return view('login');
    })->name('login');

});

Route::middleware('auth')->group(function() {
    Route::get('/', function(){
        return view('welcomming');
      
    });
    //Profile

    Route::get('/profile', [LoginController::class, 'profile']);
    Route::get('/user/logout', [LoginController::class, 'logout']);

    //JenisPenggunaan
    Route::get('/addJenisPenggunaan', [JenisPenggunaanController::class, 'addJenisPenggunaan']);

    //1. Biaya Pendidikan
      //A. Biaya Dosen
      Route::get('/jpDosen/create', [JenisPenggunaanController::class, 'biayaDosenCreate']);
      Route::post('/addJenisPenggunaan', [JenisPenggunaanController::class, 'biayaDosenStore']);
      Route::get('/addJenisPenggunaan', [JenisPenggunaanController::class, 'biayaDosenIndex']);
      Route::get('/addJenisPenggunaan/{jenis_penggunaan_id}', [JenisPenggunaanController::class, 'biayaDosenShow']);
      Route::get('/jpDosen/{jenis_penggunaan_id}/edit', [JenisPenggunaanController::class, 'biayaDosenEdit']);
      Route::put('/addJenisPenggunaan/{jenis_penggunaan_id}', [JenisPenggunaanController::class, 'biayaDosenUpdate']);
      Route::delete('/addJenisPenggunaan/{jenis_penggunaan_id}', [JenisPenggunaanController::class, 'biayaDosenDestroy']);
    
      //B. Gaji Tenaga Kependidikan
      Route::get('/jpTenagaKependidikan/create', [JenisPenggunaanController::class, 'biayaTKCreate']);
      Route::get('/jpTenagaKependidikan/{jenis_penggunaan_id}/edit', [JenisPenggunaanController::class, 'biayaTKEdit']);

      //C. Biaya Operasional Pembelajaran
      Route::get('/jpPembelajaran/create', [JenisPenggunaanController::class, 'biayaOPCreate']);
      Route::get('/jpPembelajaran/{jenis_penggunaan_id}/edit', [JenisPenggunaanController::class, 'biayaOPEdit']);

      //D. Biaya Operasional Tidak Langsung
      Route::get('/jpBOTL/create', [JenisPenggunaanController::class, 'biayaOPTLCreate']);
      Route::get('/jpBOTL/{jenis_penggunaan_id}/edit', [JenisPenggunaanController::class, 'biayaOPTLEdit']);
      
    //2. Biaya Operasional Kemahasiswaan
    Route::get('/jpKemahasiswaan/create', [JenisPenggunaanController::class, 'KemahasiswaanCreate']);
    Route::get('/jpKemahasiswaan/{jenis_penggunaan_id}/edit', [JenisPenggunaanController::class, 'KemahasiswaanEdit']);
    
    //3. Biaya Penelitian
    Route::get('/jpPenelitian/create', [JenisPenggunaanController::class, 'PenelitianCreate']);
    Route::get('/jpPenelitian/{jenis_penggunaan_id}/edit', [JenisPenggunaanController::class, 'PenelitianEdit']);
      
    //4. Biaya PkM
    Route::get('/jpPkM/create', [JenisPenggunaanController::class, 'PkMCreate']);
    Route::get('/jpPkM/{jenis_penggunaan_id}/edit', [JenisPenggunaanController::class, 'PkMEdit']);
       
    //5. Biaya SDM
    Route::get('/jpSDM/create', [JenisPenggunaanController::class, 'SDMCreate']);
    Route::get('/jpSDM/{jenis_penggunaan_id}/edit', [JenisPenggunaanController::class, 'SDMEdit']);
    
    //6. Biaya Sarana
    Route::get('/jpSarana/create', [JenisPenggunaanController::class, 'SaranaCreate']);
    Route::get('/jpSarana/{jenis_penggunaan_id}/edit', [JenisPenggunaanController::class, 'SaranaEdit']);
    
     //6. Biaya Prasarana
     Route::get('/jpPrasarana/create', [JenisPenggunaanController::class, 'PrasaranaCreate']);
     Route::get('/jpPrasarana/{jenis_penggunaan_id}/edit', [JenisPenggunaanController::class, 'PrasaranaEdit']);
         

});
