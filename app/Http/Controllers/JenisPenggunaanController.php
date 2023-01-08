<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisPenggunaanController extends Controller
{
    public function operasionalPendidikan(){
        return view('pendidikan.operasionalPendidikan');
    }

    //Operasional Pendidikan
        //A.Dosen
        public function biayaDosenCreate(){
            return view('pendidikan.a.create');
        }
        public function biayaDosenStore(Request $request){
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

        public function biayaDosenIndex(){
            $biayaDosenGenre = DB::table('biaya_dosen_genre')->get();

            return view('pendidikan.operasionalPendidikan', compact('biayaDosenGenre')); //namaVariabel
        }
        

        
    
}
