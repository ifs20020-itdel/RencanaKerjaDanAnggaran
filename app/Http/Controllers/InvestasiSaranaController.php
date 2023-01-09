<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestasiSaranaController extends Controller
{
    public function Investasisarana(){
        return view('jenisPenggunaan.sarana.sarana');
    }
//===================================================================================================================================
        public function saranaCreate(){
            return view('jenisPenggunaan.sarana.create');
        }

        public function saranaStore(Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('investasi_sarana')->insert(
                [
                    'mataAnggaran' => $request['mataAnggaran'],
                    'namaAnggaran' => $request['namaAnggaran']
                ]
            );
            
            return redirect('/sarana');
        }

        public function saranaIndex(){
            $saranaBOP = DB::table('investasi_sarana')->get();

            return view('jenisPenggunaan.sarana.sarana', compact('saranaBOP')); //namaVariabel
        }

        public function saranaShow($id){
            $saranaBOP = DB::table('investasi_sarana')->where('id', $id)->first();

            return view('jenisPenggunaan.sarana.show', compact('saranaBOP')); //namaVariabel
        }

        public function saranaEdit($id){
            $saranaBOP = DB::table('investasi_sarana')->where('id', $id)->first();

            return view('jenisPenggunaan.sarana.edit', compact('saranaBOP')); //namaVariabel
        }

        public function saranaUpdate($id, Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('investasi_sarana')->where('id', $id)
                ->update(
                    [
                        'mataAnggaran' => $request['mataAnggaran'],
                        'namaAnggaran' => $request['namaAnggaran']
                    ]
                );
            
            return redirect('/sarana');
        }
        
        public function saranaDestroy($id){
            DB::table('investasi_sarana')->where('id', '=', $id)->delete();
            return redirect('/investasisarana');
        }
}
