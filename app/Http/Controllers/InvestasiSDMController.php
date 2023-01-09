<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestasiSDMController extends Controller
{
    public function investasiSDM(){
        return view('jenisPenggunaan.sdm.sdm');
    }
//===================================================================================================================================
        public function investasiSDMCreate(){
            return view('jenisPenggunaan.sdm.create');
        }

        public function investasiSDMStore(Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('investasi_sdm')->insert(
                [
                    'mataAnggaran' => $request['mataAnggaran'],
                    'namaAnggaran' => $request['namaAnggaran']
                ]
            );
            
            return redirect('/investasiSDM');
        }

        public function investasiSDMIndex(){
            $SDMBOP = DB::table('investasi_sdm')->get();

            return view('jenisPenggunaan.sdm.sdm', compact('SDMBOP')); //namaVariabel
        }

        public function investasiSDMShow($id){
            $SDMBOP = DB::table('investasi_sdm')->where('id', $id)->first();

            return view('jenisPenggunaan.sdm.show', compact('SDMBOP')); //namaVariabel
        }

        public function investasiSDMEdit($id){
            $SDMBOP = DB::table('investasi_sdm')->where('id', $id)->first();

            return view('jenisPenggunaan.sdm.edit', compact('SDMBOP')); //namaVariabel
        }

        public function investasiSDMUpdate($id, Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('investasi_sdm')->where('id', $id)
                ->update(
                    [
                        'mataAnggaran' => $request['mataAnggaran'],
                        'namaAnggaran' => $request['namaAnggaran']
                    ]
                );
            
            return redirect('/investasiSDM');
        }
        
        public function investasiSDMDestroy($id){
            DB::table('investasi_sdm')->where('id', '=', $id)->delete();
            return redirect('/investasiSDM');
        }
}
