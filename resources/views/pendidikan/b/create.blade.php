@extends('layout.master')
@section('title', 'B. Gaji Tenaga Kependidikan')
@section('breadcrumb1')
    <li class="breadcrumb-item"><a href="/biayaOperasionalPendidikan">Operasional Pendidikan</a></li>
@endsection
@section('breadcrumb2')
    <li class="breadcrumb-item">B. Gaji Tenaga Kependidikan</li>
@endsection

@section('judul', 'B. Gaji Tenaga Kependidikan (Gaji Dan Honor)')

@section('content')
<h6>Berikut Panduan Template RKA  <a href="https://docs.google.com/spreadsheets/d/140zs3W8NE7GwuaQlNXegL6atDtKjO4y7/edit#gid=712992635" target="_blank"><span class="badge badge-success ml-1">Template RKA</span></a></h6>
<br>
<div class="col-lg-7 col-6">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Form Menambahkan Jenis Penggunaan dan Mata Anggaran</h3>
        </div>
                
        <form action="/gajiTenagaKependidikan" method="POST">
            @csrf
            <div class="card-body">
                
                <div class="form-group">
                    <label>Mata Anggaran</label>
                    <input type="text" name="mataAnggaranB" class="form-control" placeholder="Cth. B. II.2.1" value="{{ old('mataAnggaranB') }}">

                    @error('mataAnggaranB')
                    <p class="text-danger font-weight-bold">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Anggaran</label>
                    <input type="text" name="namaAnggaranB" class="form-control" placeholder="Cth. Gaji Staff Pendukung Akademik Termasuk TA" value="{{ old('namaAnggaranB') }}">

                    @error('namaAnggaranB')
                    <p class="text-danger font-weight-bold">{{$message}}</p>
                    @enderror
                </div>

            </div>

            <div class="card-footer">
                <a href="/gajiTenagaKependidikan" class="btn btn-danger float-right mr-2 ml-4">Batalkan</a>
                <button type="submit" class="btn btn-dark float-right mr-4">Tambahkan</button>
            </div>
            
        </form>
        
    </div>
</div>

@endsection