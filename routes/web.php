<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JenisPenggunaanController;

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
    Route::get('/user/logout', [LoginController::class, 'logout']);

    //Profile
    Route::get('/profile', [LoginController::class, 'profile']);
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
            Route::get('/biayaDosen/{biaya_dosen_genre_id}', [JenisPenggunaanController::class, 'biayaDosenGenreShow']);
            //Edit Data
            Route::get('/biayaDosen/{biaya_dosen_genre_id}/edit', [JenisPenggunaanController::class, 'biayaDosenGenreEdit']);
            //Update Data Ke Database
            Route::put('/biayaOperasionalPendidikan/{biaya_dosen_genre_id}', [JenisPenggunaanController::class, 'biayaDosenGenreUpdate']);
            //Delete Data
            Route::delete('/biayaOperasionalPendidikan/{biaya_dosen_genre_id}', [JenisPenggunaanController::class, 'biayaDosenGenreDestroy']);

         //A. Biaya Dosen
            //Mengarah ke form Create Data
            Route::get('/gajiTenagaKependidikan/create', [JenisPenggunaanController::class, 'gajiTenagaKependidikanCreate']);
            //Menyimpan Data ke table Jenis Penggunaan (A. Biaya Dosen)
            Route::post('/biayaOperasionalPendidikan', [JenisPenggunaanController::class, 'gajiTenagaKependidikanStore']);
            //Tampil Semua Data
            Route::get('/biayaOperasionalPendidikan', [JenisPenggunaanController::class, 'gajiTenagaKependidikanIndex']);
            //Detail Data
            Route::get('/gajiTenagaKependidikan/{gaji_tenaga_kependidikan_genre_id}', [JenisPenggunaanController::class, 'gajiTenagaKependidikanShow']);
            //Edit Data
            Route::get('/gajiTenagaKependidikan/{gaji_tenaga_kependidikan_genre_id}/edit', [JenisPenggunaanController::class, 'gajiTenagaKependidikanEdit']);
            //Update Data Ke Database
            Route::put('/biayaOperasionalPendidikan/{gaji_tenaga_kependidikan_genre_id}', [JenisPenggunaanController::class, 'gajiTenagaKependidikanUpdate']);
            //Delete Data
            Route::delete('/biayaOperasionalPendidikan/{gaji_tenaga_kependidikan_genre_id}', [JenisPenggunaanController::class, 'gajiTenagaKependidikanDestroy']);

            
});
