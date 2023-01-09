@extends('layout.master')
@section('title', 'A. Biaya Dosen')
@section('breadcrumb1')
    <li class="breadcrumb-item"><a href="#"></a>Ajukan Rencana</li>
@endsection
@section('breadcrumb2')
    <li class="breadcrumb-item">A. Biaya Dosen</li>
@endsection

@section('judul', 'A. Biaya Dosen (Gaji Dan Honor)')

@section('content')
<hr>
<br>
<div class="col-lg-7 col-6 mx-auto">
    <div class="card card-success">
        <div class="card card-header text-center">
            <h3 class="card-title">Formulir Pengajuan Rencana Kerja dan Anggaran</h3>
        </div>
                
        <form action="/addJenisPenggunaan" method="POST">
            @csrf
            <div class="card-body">

                <input type="hidden" name="jenis" class="form-control" value="1A">

                <div class="form-group">
                    <label>Nama Anggaran</label>
                    <select class="form-control" name="penggunaan_id" id="">
                      <option>---Nama Anggaran---</option>
                      @foreach ($Penggunaan as $item)
                        @if($item->bagianTable == "1A")
                            <option value="{{$item->id}}">{{$item->namaAnggaran}}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>

                <div class="form-group">
                    <label>Nama Anggaran</label>
                    <input type="text" name="namaAnggaran" class="form-control" placeholder="Cth. Gaji Dosen" value="{{old('namaAnggaran')}}">

                    @error('namaAnggaran')
                    <p class="text-danger font-weight-bold">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Rincian Program/Aktivitas</label>
                    <textarea class="form-control" name="" value="{{old('')}}"></textarea>

                    @error('mataAnggaran')
                    <p class="text-danger font-weight-bold">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-3">
                            <label>Volume</label>
                            <input type="text" class="form-control" placeholder="Cth. 10, 15, Dll">
                        </div>
                        <div class="col-4">
                            <label>Harga Satuan (1000 Rupiah)</label>
                            <input type="text" class="form-control" placeholder="Cth. 10000">
                        </div>
                        <div class="col-5">
                            <label>Total</label>
                            <input type="text" class="form-control" placeholder="total">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <label>Start</label>
                            <input type="month" class="form-control" placeholder="Cth. 10, 15, Dll">
                        </div>
                        <div class="col-6">
                            <label>Finish</label>
                            <input type="month" class="form-control" placeholder="Cth. 10000">
                        </div>
                    </div>
                </div>
                

               

            </div>

            <div class="card-footer">
                <a href="/addJenisPenggunaan" class="btn btn-danger float-right mr-2 ml-4">Batalkan</a>
                <button type="submit" class="btn btn-dark float-right mr-4">Tambahkan</button>
            </div>
            
        </form>
        
    </div>
</div>

@endsection