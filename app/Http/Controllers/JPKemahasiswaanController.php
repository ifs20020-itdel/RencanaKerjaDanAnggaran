<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JPKemahasiswaanController extends Controller
{
    public function operasionalKemahasiswaan(){
        return view('kemahasiswaan.operasionalKemahasiswaan');
    }
//===================================================================================================================================
    //Operasional Pendidikan
        //A.Dosen
        public function biayaDosenGenreCreate(){
            return view('pendidikan.a.create');
        }

        public function biayaDosenGenreStore(Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_operasional_pendidikan')->insert(
                [
                    'bagianTable' => $request['bagianTable'],
                    'mataAnggaran' => $request['mataAnggaran'],
                    'namaAnggaran' => $request['namaAnggaran']
                ]
            );
            
            return redirect('/biayaOperasionalPendidikan');
        }

        public function biayaDosenGenreIndex(){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->get();

            return view('pendidikan.operasionalPendidikan', compact('biayaOperationalPendidikan')); //namaVariabel
        }

        public function biayaDosenGenreShow($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('pendidikan.a.show', compact('biayaOperationalPendidikan')); //namaVariabel
        }

        public function biayaDosenGenreEdit($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('pendidikan.a.edit', compact('biayaOperationalPendidikan')); //namaVariabel
        }

        public function biayaDosenGenreUpdate($id, Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_operasional_pendidikan')->where('id', $id)
                ->update(
                    [
                        'bagianTable' => $request['bagianTable'],
                        'mataAnggaran' => $request['mataAnggaran'],
                        'namaAnggaran' => $request['namaAnggaran']
                    ]
                );
            
            return redirect('/biayaOperasionalPendidikan');
        }
        
        public function biayaDosenGenreDestroy($id){
            DB::table('biaya_operasional_pendidikan')->where('id', '=', $id)->delete();
            return redirect('/biayaOperasionalPendidikan');
        }

}
