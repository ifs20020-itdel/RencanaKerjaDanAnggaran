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
        public function operasionalKemahasiswaanGenreCreate(){
            return view('kemahasiswaan.create');
        }

        public function operasionalKemahasiswaanGenreStore(Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_operasional_kemahasiswaan')->insert(
                [
                    'mataAnggaran' => $request['mataAnggaran'],
                    'namaAnggaran' => $request['namaAnggaran']
                ]
            );
            
            return redirect('/biayaOperasionalKemahasiswaan');
        }

        public function operasionalKemahasiswaanGenreIndex(){
            $biayaOperationalKemahasiswaan = DB::table('biaya_operasional_kemahasiswaan')->get();

            return view('kemahasiswaan.operasionalKemahasiswaan', compact('biayaOperationalKemahasiswaan')); //namaVariabel
        }

        public function operasionalKemahasiswaanGenreShow($id){
            $biayaOperationalKemahasiswaan = DB::table('biaya_operasional_kemahasiswaan')->where('id', $id)->first();

            return view('kemahasiswaan.show', compact('biayaOperationalKemahasiswaan')); //namaVariabel
        }

        public function operasionalKemahasiswaanGenreEdit($id){
            $biayaOperationalKemahasiswaan = DB::table('biaya_operasional_kemahasiswaan')->where('id', $id)->first();

            return view('kemahasiswaan.edit', compact('biayaOperationalKemahasiswaan')); //namaVariabel
        }

        public function operasionalKemahasiswaanGenreUpdate($id, Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_operasional_kemahasiswaan')->where('id', $id)
                ->update(
                    [
                        'mataAnggaran' => $request['mataAnggaran'],
                        'namaAnggaran' => $request['namaAnggaran']
                    ]
                );
            
            return redirect('/biayaOperasionalKemahasiswaan');
        }
        
        public function operasionalKemahasiswaanGenreDestroy($id){
            DB::table('biaya_operasional_kemahasiswaan')->where('id', '=', $id)->delete();
            return redirect('/biayaOperasionalKemahasiswaan');
        }

}
