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
        //A
        Route::get('/biayaOperasionalPendidikan/create', [JenisPenggunaanController::class, 'oPDosenCreate']);


});
