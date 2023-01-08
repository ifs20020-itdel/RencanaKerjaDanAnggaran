<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisPenggunaanController extends Controller
{
    public function operasionalPendidikan(){
        return view('pendidikan.operasionalPendidikan');
    }
//===================================================================================================================================
    //Operasional Pendidikan
        //A.Dosen
        public function biayaDosenGenreCreate(){
            return view('pendidikan.a.create');
        }
        public function biayaDosenGenreStore(Request $request){
            $request->validate([
                'namaAnggaran' => 'required',
                'mataAnggaran' => 'required',
            ],
            [
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_dosen_genre')->insert(
                [
                    'namaAnggaran' => $request['namaAnggaran'],
                    'mataAnggaran' => $request['mataAnggaran']
                ]
            );
            
            return redirect('/biayaOperasionalPendidikan');
        }

        public function biayaDosenGenreIndex(){
            $biayaDosenGenre = DB::table('biaya_dosen_genre')->get();

            return view('pendidikan.operasionalPendidikan', compact('biayaDosenGenre')); //namaVariabel
        }

        public function biayaDosenGenreShow($id){
            $biayaDosenGenre = DB::table('biaya_dosen_genre')->where('id', $id)->first();

            return view('pendidikan.a.show', compact('biayaDosenGenre')); //namaVariabel
        }

        public function biayaDosenGenreEdit($id){
            $biayaDosenGenre = DB::table('biaya_dosen_genre')->where('id', $id)->first();

            return view('pendidikan.a.edit', compact('biayaDosenGenre')); //namaVariabel
        }

        public function biayaDosenGenreUpdate($id, Request $request){
            $request->validate([
                'namaAnggaran' => 'required',
                'mataAnggaran' => 'required',
            ],
            [
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_dosen_genre')->where('id', $id)
                ->update(
                    [
                        'namaAnggaran' => $request['namaAnggaran'],
                        'mataAnggaran' => $request['mataAnggaran']
                    ]
                );
            
            return redirect('/biayaOperasionalPendidikan');
        }
        
        public function biayaDosenGenreDestroy($id){
            DB::table('biaya_dosen_genre')->where('id', '=', $id)->delete();
            return redirect('/biayaOperasionalPendidikan');
        }

//===================================================================================================================================
    //Operasional Pendidikan
        //B. Tenaga Kependidikan
    public function gajiTenagaKependidikanCreate(Request $request){
            $request->validate([
                'namaAnggaran' => 'required',
                'mataAnggaran' => 'required',
            ],
            [
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_dosen_genre')->insert(
                [
                    'namaAnggaran' => $request['namaAnggaran'],
                    'mataAnggaran' => $request['mataAnggaran']
                ]
            );
            
            return redirect('/biayaOperasionalPendidikan');
        }

        public function gajiTenagaKependidikanStore(){
            $gajiTenagaKependidikan = DB::table('gaji_tenaga_kependidikan_genre')->get();

            return view('pendidikan.operasionalPendidikan', compact('gajiTenagaKependidikan')); //namaVariabel
        }

        public function biayaDosenGenreShow($id){
            $biayaDosenGenre = DB::table('biaya_dosen_genre')->where('id', $id)->first();

            return view('pendidikan.a.show', compact('biayaDosenGenre')); //namaVariabel
        }

        public function biayaDosenGenreEdit($id){
            $biayaDosenGenre = DB::table('biaya_dosen_genre')->where('id', $id)->first();

            return view('pendidikan.a.edit', compact('biayaDosenGenre')); //namaVariabel
        }

        public function biayaDosenGenreUpdate($id, Request $request){
            $request->validate([
                'namaAnggaran' => 'required',
                'mataAnggaran' => 'required',
            ],
            [
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_dosen_genre')->where('id', $id)
                ->update(
                    [
                        'namaAnggaran' => $request['namaAnggaran'],
                        'mataAnggaran' => $request['mataAnggaran']
                    ]
                );
            
            return redirect('/biayaOperasionalPendidikan');
        }
        
        public function biayaDosenGenreDestroy($id){
            DB::table('biaya_dosen_genre')->where('id', '=', $id)->delete();
            return redirect('/biayaOperasionalPendidikan');
        }    

}
