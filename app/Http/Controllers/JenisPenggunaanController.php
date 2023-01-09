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
        public function gajiTenagaKependidikanShow($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('workplan.jenisPenggunaan.pendidikan.b.show', compact('biayaOperationalPendidikan')); //namaVariabel
        }
        public function gajiTenagaKependidikanEdit($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('workplan.jenisPenggunaan.pendidikan.b.edit', compact('biayaOperationalPendidikan')); //namaVariabel
        }
         
//===================================================================================================================================
        //Operasional Pendidikan
        //C. Biaya Operasional Pembelajaran
         public function operasionalPembelajaranCreate(){
            return view('pendidikan.c.create');
        }
        public function operasionalPembelajaranShow($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('pendidikan.c.show', compact('biayaOperationalPendidikan')); //namaVariabel
        }
        public function operasionalPembelajaranEdit($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('pendidikan.c.edit', compact('biayaOperationalPendidikan')); //namaVariabel
        }

//===================================================================================================================================
        //Operasional Tidak Langsung
        //D. Biaya Operasional Tidak Langsung
         public function operasionalTidakLangsungCreate(){
            return view('pendidikan.d.create');
        }
        public function operasionalTidakLangsungShow($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('pendidikan.d.show', compact('biayaOperationalPendidikan')); //namaVariabel
        }
        public function operasionalTidakLangsungEdit($id){
            $biayaOperationalPendidikan = DB::table('biaya_operasional_pendidikan')->where('id', $id)->first();

            return view('pendidikan.d.edit', compact('biayaOperationalPendidikan')); //namaVariabel
        }

}
