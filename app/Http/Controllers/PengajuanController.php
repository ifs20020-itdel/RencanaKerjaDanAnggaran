<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penggunaan;
use App\Models\Pengajuan;

use App\Helpers\AuthUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class PengajuanController extends Controller
{
    public function Pengajuan(){
        $Pengajuan = Pengajuan::all();
        return view('workplan.pengajuan.index', compact('Pengajuan'));
    }
    
    public function PDosenCreate(){
        $Penggunaan = Penggunaan::all();
        return view('workplan.pengajuan.pendidikan.a.create', compact('Penggunaan'));
    }

    public function PengajuanStore(Request $request){
        $request->validate([
            'penggunaan_id' => 'required',
            'rincianProgram' => 'required',
            'satuan' => 'required',
            'volume' => 'required',
            'hargaSatuan' => 'required',
            'start' => 'required',
            'finish' => 'required',
        ],
        [
            'penggunaan_id.required' => 'Pilih Jenis Penggunaan Anggaran',
            'rincianProgram.required' => 'Rincian Program Harus Di Isi',
            'satuan.required' => 'Satuan Harus Di Isi',
            'volume.required' => 'Volume Harus Di Isi',
            'hargaSatuan.required' => 'Harga Satuan Harus Di Isi',
            'start.required' => 'Waktu Mulai Harus Di Isi',
            'finish.required' => 'Waktu Selesai Harus Di Isi',
        ]);
        
        $Pengajuan = new Pengajuan;
        $Pengajuan->jenis = $request->jenis;
        $Pengajuan->rincianProgram = $request->rincianProgram;
        $Pengajuan->volume = $request->volume;
        $Pengajuan->satuan = $request->satuan;
        $Pengajuan->hargaSatuan = $request->hargaSatuan;
        $Pengajuan->total = $request->total;
        $Pengajuan->start = $request->start;
        $Pengajuan->finish = $request->finish;
        $Pengajuan->pemohon = $request->pemohon;
        $Pengajuan->user_id = Auth::user()->id;
        $Pengajuan->penggunaan_id = $request->penggunaan_id;
        $Pengajuan->save();

        return redirect('/pengajuan');

    }
    
}
