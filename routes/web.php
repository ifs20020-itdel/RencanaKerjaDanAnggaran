<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JenisPenggunaanController;
use App\Http\Controllers\JPGajiTenagaKependidikanController;

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
    //ALL CRUD Jenis Penggunaan

    //ALL CRUD Ajukan RKA
        //Halamam Index
        Route::get('/biayaOperasionalPendidikan', [JenisPenggunaanController::class, 'operasionalPendidikan']);
        //A. Biaya Dosen
            //Mengarah ke form Create Data
            Route::get('/biayaDosen/create', [JenisPenggunaanController::class, 'biayaDosenGenreCreate']);
            //Menyimpan Data ke table Jenis Penggunaan (A. Biaya Dosen)
            Route::post('/biayaOperasionalPendidikan', [JenisPenggunaanController::class, 'biayaDosenGenreStore']);
            //Tampil Semua Data
            Route::get('/biayaOperasionalPendidikan', [JenisPenggunaanController::class, 'biayaDosenGenreIndex']);
            //Detail Data
            Route::get('/biayaDosen/{biaya_operasional_pendidikan_id}', [JenisPenggunaanController::class, 'biayaDosenGenreShow']);
            //Edit Data
            Route::get('/biayaDosen/{biaya_operasional_pendidikan_id}/edit', [JenisPenggunaanController::class, 'biayaDosenGenreEdit']);
            //Update Data Ke Database
            Route::put('/biayaOperasionalPendidikan/{biaya_operasional_pendidikan_id}', [JenisPenggunaanController::class, 'biayaDosenGenreUpdate']);
            //Delete Data
            Route::delete('/biayaOperasionalPendidikan/{biaya_operasional_pendidikan_id}', [JenisPenggunaanController::class, 'biayaDosenGenreDestroy']);

          //B. Gaji Tenaga Kependidikan
            //Mengarah ke form Create Data
            Route::get('/gajiTenagaKependidikan/create', [JenisPenggunaanController::class, 'gajiTenagaKependidikanCreate']);
            //Detail Data
            Route::get('/gajiTenagaKependidikan/{biaya_operasional_pendidikan_id}', [JenisPenggunaanController::class, 'gajiTenagaKependidikanShow']);
            //Edit Data
            Route::get('/gajiTenagaKependidikan/{biaya_operasional_pendidikan_id}/edit', [JenisPenggunaanController::class, 'gajiTenagaKependidikanEdit']);

            
          //B. Gaji Tenaga Kependidikan
            //Mengarah ke form Create Data
            Route::get('/operasionalPembelajaran/create', [JenisPenggunaanController::class, 'operasionalPembelajaranCreate']);
            //Detail Data
            Route::get('/operasionalPembelajaran/{biaya_operasional_pendidikan_id}', [JenisPenggunaanController::class, 'operasionalPembelajaranShow']);
            //Edit Data
            Route::get('/operasionalPembelajaran/{biaya_operasional_pendidikan_id}/edit', [JenisPenggunaanController::class, 'operasionalPembelajaranEdit']);
        
        
});
