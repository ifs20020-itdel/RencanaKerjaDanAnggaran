@extends('layout.master')
@section('title', 'A. Biaya Dosen')
@section('breadcrumb1')
    <li class="breadcrumb-item"><a href="/biayaOperasionalPendidikan">Operasional Pendidikan</a></li>
@endsection
@section('breadcrumb2')
    <li class="breadcrumb-item">A. Biaya Dosen</li>
@endsection

@section('judul', 'A. Biaya Dosen (Gaji Dan Honor)')

@section('content')
<h6>Berikut Panduan Template RKA  <a href="https://docs.google.com/spreadsheets/d/140zs3W8NE7GwuaQlNXegL6atDtKjO4y7/edit#gid=712992635" target="_blank"><span class="badge badge-success ml-1">Template RKA</span></a></h6>
<br>
<div class="col-lg-7 col-6">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Form Menambahkan Jenis Penggunaan dan Mata Anggaran</h3>
        </div>
                
        <form action="/biayaOperasionalPendidikan" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Anggaran</label>
                    <input type="text" name="namaAnggaran" class="form-control">

                    @error('namaAnggaran')
                    <p class="text-danger font-weight-bold">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Mata Anggaran</label>
                    <input type="text" name="mataAnggaran" class="form-control">

                    @error('mataAnggaran')
                    <p class="text-danger font-weight-bold">{{$message}}</p>
                    @enderror
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-dark float-right">Tambahkan</button>
            </div>
            
        </form>
        
    </div>
</div>

@endsection