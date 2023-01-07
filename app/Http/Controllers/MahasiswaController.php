<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller{

    public function input(){
        return view('mahasiswa.form-mahasiswa');
    }

    public function proses(Request $request){
        $this->validate($request, [
            'nim' => 'required|min:8',
            'nama' => 'required',
            'prodi' => 'required',
            'angkatan' => 'required',
        ]);

        return view('mahasiswa.form-hasil',['data' => $request]);
    }
}
