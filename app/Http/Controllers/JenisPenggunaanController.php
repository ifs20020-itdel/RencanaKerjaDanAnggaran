<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisPenggunaanController extends Controller
{
    public function addJenisPenggunaan(){
        return view('workplan.jenisPenggunaan.index');
    }
//===================================================================================================================================
    //Operasional Pendidikan
        //A.Dosen
        public function biayaDosenCreate(){
            return view('workplan.jenisPenggunaan.pendidikan.a.create');
        }

        public function biayaDosenStore(Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('jenis_penggunaan')->insert(
                [
                    'bagianTable' => $request['bagianTable'],
                    'mataAnggaran' => $request['mataAnggaran'],
                    'namaAnggaran' => $request['namaAnggaran']
                ]
            );
            return redirect('/addJenisPenggunaan');
        }

        public function biayaDosenIndex(){
            $JenisPenggunaan = DB::table('jenis_penggunaan')->get();
            return view('workplan.jenisPenggunaan.index', compact('JenisPenggunaan')); //namaVariabel
        }

        public function biayaDosenShow($id){
            $JenisPenggunaan = DB::table('jenis_penggunaan')->where('id', $id)->first();

            return view('workplan.jenisPenggunaan.show', compact('JenisPenggunaan')); //namaVariabel
        }
        public function biayaDosenEdit($id){
            $JenisPenggunaan = DB::table('jenis_penggunaan')->where('id', $id)->first();

            return view('workplan.jenisPenggunaan.pendidikan.a.edit', compact('JenisPenggunaan')); //namaVariabel
        }
        public function biayaDosenUpdate($id, Request $request){
            $request->validate([
                'mataAnggaran' => 'required',
                'namaAnggaran' => 'required',
            ],
            [
                'mataAnggaran.required' => 'Mata Anggaran Harus Di Isi',
                'namaAnggaran.required' => 'Nama Anggaran Harus Di Isi',
            ]);
            DB::table('jenis_penggunaan')->where('id', $id)
                ->update(
                    [
                        'bagianTable' => $request['bagianTable'],
                        'mataAnggaran' => $request['mataAnggaran'],
                        'namaAnggaran' => $request['namaAnggaran']
                    ]
                );
            
            return redirect('/addJenisPenggunaan');
        }

        public function biayaDosenDestroy($id){
            DB::table('jenis_penggunaan')->where('id', '=', $id)->delete();
            return redirect('/addJenisPenggunaan');
        }

//===================================================================================================================================
        //Operasional Pendidikan
        //B. Gaji Tenaga Kependidikan
        public function biayaTKCreate(){
            return view('workplan.jenisPenggunaan.pendidikan.b.create');
        }
        public function biayaTKEdit($id){
            $JenisPenggunaan = DB::table('jenis_penggunaan')->where('id', $id)->first();

            return view('workplan.jenisPenggunaan.pendidikan.b.edit', compact('JenisPenggunaan')); //namaVariabel
        }
         
//===================================================================================================================================
        //Operasional Pendidikan
        //C. Biaya Operasional Pembelajaran
        public function biayaOPCreate(){
            return view('workplan.jenisPenggunaan.pendidikan.c.create');
        }
        public function biayaOPEdit($id){
            $JenisPenggunaan = DB::table('jenis_penggunaan')->where('id', $id)->first();

            return view('workplan.jenisPenggunaan.pendidikan.c.edit', compact('JenisPenggunaan')); //namaVariabel
        }
        
//===================================================================================================================================
        //Operasional Tidak Langsung
        //D. Biaya Operasional Tidak Langsung
        public function biayaOPTLCreate(){
            return view('workplan.jenisPenggunaan.pendidikan.d.create');
        }
        public function biayaOPTLEdit($id){
            $JenisPenggunaan = DB::table('jenis_penggunaan')->where('id', $id)->first();

            return view('workplan.jenisPenggunaan.pendidikan.d.edit', compact('JenisPenggunaan')); //namaVariabel
        }

//===================================================================================================================================
// 2. Operasional Kemahasiswaan
    public function KemahasiswaanCreate(){
        return view('workplan.jenisPenggunaan.kemahasiswaan.create');
    }
    public function KemahasiswaanEdit($id){
        $JenisPenggunaan = DB::table('jenis_penggunaan')->where('id', $id)->first();

        return view('workplan.jenisPenggunaan.kemahasiswaan.edit', compact('JenisPenggunaan')); //namaVariabel
    }

//===================================================================================================================================
// 3. Biaya Penelitian
    public function PenelitianCreate(){
        return view('workplan.jenisPenggunaan.penelitian.create');
    }
    public function PenelitianEdit($id){
        $JenisPenggunaan = DB::table('jenis_penggunaan')->where('id', $id)->first();

        return view('workplan.jenisPenggunaan.penelitian.edit', compact('JenisPenggunaan')); //namaVariabel
    }

//===================================================================================================================================
// 4. Biaya PkM
    public function PkMCreate(){
        return view('workplan.jenisPenggunaan.PkM.create');
    }
    public function PkMEdit($id){
        $JenisPenggunaan = DB::table('jenis_penggunaan')->where('id', $id)->first();

        return view('workplan.jenisPenggunaan.PkM.edit', compact('JenisPenggunaan')); //namaVariabel
    }
    

}
