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
    

    //ALL CRUD JenisPenggunaan(Pendidikan)
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

            
          //C. Biaya Operasional Pembelajaran
            //Mengarah ke form Create Data
            Route::get('/operasionalPembelajaran/create', [JenisPenggunaanController::class, 'operasionalPembelajaranCreate']);
            //Detail Data
            Route::get('/operasionalPembelajaran/{biaya_operasional_pendidikan_id}', [JenisPenggunaanController::class, 'operasionalPembelajaranShow']);
            //Edit Data
            Route::get('/operasionalPembelajaran/{biaya_operasional_pendidikan_id}/edit', [JenisPenggunaanController::class, 'operasionalPembelajaranEdit']);
        
          //D. Biaya Operasional Tidak Langsung
            //Mengarah ke form Create Data
            Route::get('/operasionalTidakLangsung/create', [JenisPenggunaanController::class, 'operasionalTidakLangsungCreate']);
            //Detail Data
            Route::get('/operasionalTidakLangsung/{biaya_operasional_pendidikan_id}', [JenisPenggunaanController::class, 'operasionalTidakLangsungShow']);
            //Edit Data
            Route::get('/operasionalTidakLangsung/{biaya_operasional_pendidikan_id}/edit', [JenisPenggunaanController::class, 'operasionalTidakLangsungEdit']);
  //============================================================================================================================================================================

   //ALL CRUD JenisPenggunaan(Kemahasiswaan)
        //Halamam Index
        Route::get('/kemahasiswaan', [JPKemahasiswaanController::class, 'operasionalKemahasiswaan']);
        Route::get('/kemahasiswaan/create', [JPKemahasiswaanController::class, 'kemahasiswaanCreate']);
        Route::post('/kemahasiswaan', [JPKemahasiswaanController::class, 'kemahasiswaanStore']);
        Route::get('/kemahasiswaan', [JPKemahasiswaanController::class, 'kemahasiswaanIndex']);
        Route::get('/kemahasiswaan/{kemahasiswaan_id}', [JPKemahasiswaanController::class, 'kemahasiswaanShow']);
        Route::get('/kemahasiswaan/{kemahasiswaan_id}/edit', [JPKemahasiswaanController::class, 'kemahasiswaanEdit']);
        Route::put('/kemahasiswaan/{kemahasiswaan_id}', [JPKemahasiswaanController::class, 'kemahasiswaanUpdate']);
        Route::delete('/kemahasiswaan/{kemahasiswaan_id}', [JPKemahasiswaanController::class, 'kemahasiswaanDestroy']);

    //ALL CRUD JenisPenggunaan(Penelitian)
        //Halamam Index
        Route::get('/penelitian', [JPPenelitianController::class, 'operasionalPenelitian']);
        Route::get('/penelitian/create', [JPPenelitianController::class, 'penelitianCreate']);
        Route::post('/penelitian', [JPPenelitianController::class, 'penelitianStore']);
        Route::get('/penelitian', [JPPenelitianController::class, 'penelitianIndex']);
        Route::get('/penelitian/{penelitian_id}', [JPPenelitianController::class, 'penelitianShow']);
        Route::get('/penelitian/{penelitian_id}/edit', [JPPenelitianController::class, 'penelitianEdit']);
        Route::put('/penelitian/{penelitian_id}', [JPPenelitianController::class, 'penelitianUpdate']);
        Route::delete('/penelitian/{penelitian_id}', [JPPenelitianController::class, 'penelitianDestroy']);

      //ALL CRUD JenisPenggunaan(PkM)
        //Halamam Index
        Route::get('/pkm', [JPPkMController::class, 'operasionalPkM']);
        Route::get('/pkm/create', [JPPkMController::class, 'pkmCreate']);
        Route::post('/pkm', [JPPkMController::class, 'pkmStore']);
        Route::get('/pkm', [JPPkMController::class, 'pkmIndex']);
        Route::get('/pkm/{pkm_id}', [JPPkMController::class, 'pkmShow']);
        Route::get('/pkm/{pkm_id}/edit', [JPPkMController::class, 'pkmEdit']);
        Route::put('/pkm/{pkm_id}', [JPPkMController::class, 'pkmUpdate']);
        Route::delete('/pkm/{pkm_id}', [JPPkMController::class, 'pkmDestroy']);
       
      //ALL CRUD JenisPenggunaan(InvestasiSDM)
        //Halamam Index
        Route::get('/investasiSDM', [InvestasiSDMController::class, 'investasiSDM']);
        Route::get('/investasiSDM/create', [InvestasiSDMController::class, 'investasiSDMCreate']);
        Route::post('/investasiSDM', [InvestasiSDMController::class, 'investasiSDMStore']);
        Route::get('/investasiSDM', [InvestasiSDMController::class, 'investasiSDMIndex']);
        Route::get('/investasiSDM/{investasiSDM_id}', [InvestasiSDMController::class, 'investasiSDMShow']);
        Route::get('/investasiSDM/{investasiSDM_id}/edit', [InvestasiSDMController::class, 'investasiSDMEdit']);
        Route::put('/investasiSDM/{investasiSDM_id}', [InvestasiSDMController::class, 'investasiSDMUpdate']);
        Route::delete('/investasiSDM/{investasiSDM_id}', [InvestasiSDMController::class, 'investasiSDMDestroy']);

        //ALL CRUD JenisPenggunaan(Sarana)
        //Halamam Index
        Route::get('/sarana', [InvestasiSaranaController::class, 'Investasisarana']);
        Route::get('/sarana/create', [InvestasiSaranaController::class, 'saranaCreate']);
        Route::post('/sarana', [InvestasiSaranaController::class, 'saranaStore']);
        Route::get('/sarana', [InvestasiSaranaController::class, 'saranaIndex']);
        Route::get('/sarana/{sarana_id}', [InvestasiSaranaController::class, 'saranaShow']);
        Route::get('/sarana/{sarana_id}/edit', [InvestasiSaranaController::class, 'saranaEdit']);
        Route::put('/sarana/{sarana_id}', [InvestasiSaranaController::class, 'saranaUpdate']);
        Route::delete('/sarana/{sarana_id}', [InvestasiSaranaController::class, 'saranaDestroy']);

         //ALL CRUD JenisPenggunaan(Prasarana)
        //Halamam Index
        Route::get('/prasarana', [InvestasiPrasaranaController::class, 'InvestasiPrasarana']);
        Route::get('/prasarana/create', [InvestasiPrasaranaController::class, 'PrasaranaCreate']);
        Route::post('/prasarana', [InvestasiPrasaranaController::class, 'PrasaranaStore']);
        Route::get('/prasarana', [InvestasiPrasaranaController::class, 'PrasaranaIndex']);
        Route::get('/prasarana/{prasarana_id}', [InvestasiPrasaranaController::class, 'PrasaranaShow']);
        Route::get('/prasarana/{prasarana_id}/edit', [InvestasiPrasaranaController::class, 'PrasaranaEdit']);
        Route::put('/prasarana/{prasarana_id}', [InvestasiPrasaranaController::class, 'PrasaranaUpdate']);
        Route::delete('/prasarana/{prasarana_id}', [InvestasiPrasaranaController::class, 'PrasaranaDestroy']);
});
