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
        public function kemahasiswaanCreate(){
            return view('kemahasiswaan.create');
        }

        public function kemahasiswaanStore(Request $request){
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
            
            return redirect('/kemahasiswaan');
        }

        public function kemahasiswaanIndex(){
            $KemahasiswaanBOP = DB::table('biaya_operasional_kemahasiswaan')->get();

            return view('kemahasiswaan.operasionalKemahasiswaan', compact('KemahasiswaanBOP')); //namaVariabel
        }

        public function kemahasiswaanShow($id){
            $KemahasiswaanBOP = DB::table('biaya_operasional_kemahasiswaan')->where('id', $id)->first();

            return view('kemahasiswaan.show', compact('KemahasiswaanBOP')); //namaVariabel
        }

        public function kemahasiswaanEdit($id){
            $KemahasiswaanBOP = DB::table('biaya_operasional_kemahasiswaan')->where('id', $id)->first();

            return view('pendidikan.a.edit', compact('KemahasiswaanBOP')); //namaVariabel
        }

        public function kemahasiswaanUpdate($id, Request $request){
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
            
            return redirect('/kemahasiswaan');
        }
        
        public function kemahasiswaanDestroy($id){
            DB::table('biaya_operasional_kemahasiswaan')->where('id', '=', $id)->delete();
            return redirect('/kemahasiswaan');
        }
    

}
