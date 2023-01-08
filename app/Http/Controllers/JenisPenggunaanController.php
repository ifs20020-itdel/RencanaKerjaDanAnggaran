<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisPenggunaanController extends Controller
{
    public function operasionalPendidikan(){
        return view('pendidikan.operasionalPendidikan');
    }
//===================================================================================================================================
    //Operasional Pendidikan
        //A.Dosen
        public function biayaDosenGenreCreate(){
            return view('pendidikan.a.create');
        }

        public function biayaDosenGenreStore(Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_operasional_pendidikan')->insert(
                [
                    'bagianTable' => $request['bagianTable'],
                    'mataAnggaran' => $request['mataAnggaran'],
                    'namaAnggaran' => $request['namaAnggaran']
                ]
            );
            
            return redirect('/biayaOperasionalPendidikan');
        }

        public function biayaDosenGenreIndex(){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->get();

            return view('pendidikan.operasionalPendidikan', compact('biayaOperationalPendidikan')); //namaVariabel
        }

        public function biayaDosenGenreShow($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('pendidikan.a.show', compact('biayaOperationalPendidikan')); //namaVariabel
        }

        public function biayaDosenGenreEdit($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('pendidikan.a.edit', compact('biayaOperationalPendidikan')); //namaVariabel
        }

        public function biayaDosenGenreUpdate($id, Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('biaya_operasional_pendidikan')->where('id', $id)
                ->update(
                    [
                        'bagianTable' => $request['bagianTable'],
                        'mataAnggaran' => $request['mataAnggaran'],
                        'namaAnggaran' => $request['namaAnggaran']
                    ]
                );
            
            return redirect('/biayaOperasionalPendidikan');
        }
        
        public function biayaDosenGenreDestroy($id){
            DB::table('biaya_operasional_pendidikan')->where('id', '=', $id)->delete();
            return redirect('/biayaOperasionalPendidikan');
        }

//===================================================================================================================================
        //Operasional Pendidikan
        //B. Gaji Tenaga Kependidikan
        public function gajiTenagaKependidikanCreate(){
            return view('pendidikan.b.create');
        }
        public function gajiTenagaKependidikanShow($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('pendidikan.b.show', compact('biayaOperationalPendidikan')); //namaVariabel
        }
        public function gajiTenagaKependidikanEdit($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('pendidikan.b.edit', compact('biayaOperationalPendidikan')); //namaVariabel
        }
         
//===================================================================================================================================
        //Operasional Pendidikan
        //C. Biaya Operasional Pembelajaran

}
