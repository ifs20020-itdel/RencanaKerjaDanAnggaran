<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JPPenelitianController extends Controller
{
    public function operasionalPenelitian(){
        return view('penelitian.penelitian');
    }
//===================================================================================================================================
        public function penelitianCreate(){
            return view('penelitian.create');
        }

        public function penelitianStore(Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_penelitian')->insert(
                [
                    'mataAnggaran' => $request['mataAnggaran'],
                    'namaAnggaran' => $request['namaAnggaran']
                ]
            );
            
            return redirect('/penelitian');
        }

        public function penelitianIndex(){
            $PenelitianBOP = DB::table('biaya_penelitian')->get();

            return view('penelitian.penelitian', compact('PenelitianBOP')); //namaVariabel
        }

        public function penelitianShow($id){
            $PenelitianBOP = DB::table('biaya_penelitian')->where('id', $id)->first();

            return view('penelitian.show', compact('PenelitianBOP')); //namaVariabel
        }

        public function penelitianEdit($id){
            $PenelitianBOP = DB::table('biaya_penelitian')->where('id', $id)->first();

            return view('penelitian.edit', compact('PenelitianBOP')); //namaVariabel
        }

        public function penelitianUpdate($id, Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_penelitian')->where('id', $id)
                ->update(
                    [
                        'mataAnggaran' => $request['mataAnggaran'],
                        'namaAnggaran' => $request['namaAnggaran']
                    ]
                );
            
            return redirect('/penelitian');
        }
        
        public function penelitianDestroy($id){
            DB::table('biaya_penelitian')->where('id', '=', $id)->delete();
            return redirect('/penelitian');
        }
    
}
