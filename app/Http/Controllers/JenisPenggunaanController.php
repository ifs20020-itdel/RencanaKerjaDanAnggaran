<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            ]
        );
        }

        
    
}
