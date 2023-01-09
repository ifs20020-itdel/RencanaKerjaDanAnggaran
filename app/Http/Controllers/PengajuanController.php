<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penggunaan;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function PDosenCreate(){
        $Penggunaan = Penggunaan::all();
        return view('workplan.pengajuan.pendidikan.a.create', compact('Penggunaan'));
    }
}
