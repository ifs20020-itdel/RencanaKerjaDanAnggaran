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
    




});
