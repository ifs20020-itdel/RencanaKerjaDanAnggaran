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
        public function oPDosenCreate(){
            return view('pendidikan.a.create');
        }
    
}
