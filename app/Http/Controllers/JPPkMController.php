<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JPPkMController extends Controller
{
    public function operasionalPkM(){
        return view('jenisPenggunaan.pkm.pkm');
    }
//===================================================================================================================================
        public function pkmCreate(){
            return view('jenisPenggunaan.pkm.create');
        }

        public function pkmStore(Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_pkm')->insert(
                [
                    'mataAnggaran' => $request['mataAnggaran'],
                    'namaAnggaran' => $request['namaAnggaran']
                ]
            );
            
            return redirect('/pkm');
        }

        public function pkmIndex(){
            $PkMBOP = DB::table('biaya_pkm')->get();

            return view('jenisPenggunaan.pkm.pkm', compact('PkMBOP')); //namaVariabel
        }

        public function pkmShow($id){
            $PkMBOP = DB::table('biaya_pkm')->where('id', $id)->first();

            return view('jenisPenggunaan.pkm.show', compact('PkMBOP')); //namaVariabel
        }

        public function pkmEdit($id){
            $PkMBOP = DB::table('biaya_pkm')->where('id', $id)->first();

            return view('jenisPenggunaan.pkm.edit', compact('PkMBOP')); //namaVariabel
        }

        public function pkmUpdate($id, Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_pkm')->where('id', $id)
                ->update(
                    [
                        'mataAnggaran' => $request['mataAnggaran'],
                        'namaAnggaran' => $request['namaAnggaran']
                    ]
                );
            
            return redirect('/pkm');
        }
        
        public function pkmDestroy($id){
            DB::table('biaya_pkm')->where('id', '=', $id)->delete();
            return redirect('/pkm');
        }
}
