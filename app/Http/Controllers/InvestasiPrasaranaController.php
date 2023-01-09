<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestasiPrasaranaController extends Controller
{
    public function InvestasiPrasarana(){
        return view('jenisPenggunaan.prasarana.prasarana');
    }
//===================================================================================================================================
        public function PrasaranaCreate(){
            return view('jenisPenggunaan.prasarana.create');
        }

        public function PrasaranaStore(Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('investasi_prasarana')->insert(
                [
                    'mataAnggaran' => $request['mataAnggaran'],
                    'namaAnggaran' => $request['namaAnggaran']
                ]
            );
            
            return redirect('/prasarana');
        }

        public function PrasaranaIndex(){
            $prasaranaBOP = DB::table('investasi_prasarana')->get();

            return view('jenisPenggunaan.prasarana.prasarana', compact('prasaranaBOP')); //namaVariabel
        }

        public function PrasaranaShow($id){
            $prasaranaBOP = DB::table('investasi_prasarana')->where('id', $id)->first();

            return view('jenisPenggunaan.prasarana.show', compact('prasaranaBOP')); //namaVariabel
        }

        public function PrasaranaEdit($id){
            $prasaranaBOP = DB::table('investasi_prasarana')->where('id', $id)->first();

            return view('jenisPenggunaan.prasarana.edit', compact('prasaranaBOP')); //namaVariabel
        }

        public function PrasaranaUpdate($id, Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('investasi_prasarana')->where('id', $id)
                ->update(
                    [
                        'mataAnggaran' => $request['mataAnggaran'],
                        'namaAnggaran' => $request['namaAnggaran']
                    ]
                );
            
            return redirect('/prasarana');
        }
        
        public function PrasaranaDestroy($id){
            DB::table('investasi_prasarana')->where('id', '=', $id)->delete();
            return redirect('/prasarana');
        }
}
