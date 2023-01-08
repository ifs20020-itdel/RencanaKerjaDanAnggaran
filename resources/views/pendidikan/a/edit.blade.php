@extends('layout.master')

@section('title')
    {{$biayaDosenGenre->mataAnggaran}}
@endsection

@section('breadcrumb1')
    <li class="breadcrumb-item"><a href="/biayaOperasionalPendidikan">Operasional Pendidikan</a></li>
@endsection
@section('breadcrumb2')
    <li class="breadcrumb-item">{{$biayaDosenGenre->mataAnggaran}} / Edit</li>
@endsection

@section('judul')
Halaman Edit Data: &nbsp; {{$biayaDosenGenre->mataAnggaran}} - {{$biayaDosenGenre->namaAnggaran}}
@endsection

@section('content')
<h6>Berikut Panduan Template RKA  <a href="https://docs.google.com/spreadsheets/d/140zs3W8NE7GwuaQlNXegL6atDtKjO4y7/edit#gid=712992635" target="_blank"><span class="badge badge-success ml-1">Template RKA</span></a></h6>
<br>
<div class="col-lg-7 col-6">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Form Update Jenis Penggunaan dan Mata Anggaran</h3>
        </div>
                
        <form action="/biayaOperasionalPendidikan/{{$biayaDosenGenre->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                
                <div class="form-group">
                    <label>Mata Anggaran</label>
                    <input type="text" name="mataAnggaran" class="form-control" value="{{$biayaDosenGenre->mataAnggaran}}">

                    @error('mataAnggaran')
                    <p class="text-danger font-weight-bold">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama Anggaran</label>
                    <input type="text" name="namaAnggaran" class="form-control" value="{{$biayaDosenGenre->namaAnggaran}}">

                    @error('namaAnggaran')
                    <p class="text-danger font-weight-bold">{{$message}}</p>
                    @enderror
                </div>

            </div>

            <div class="card-footer">
                <a href="/biayaOperasionalPendidikan" class="btn btn-danger float-right mr-2 ml-4">Batalkan</a>
                <button type="submit" class="btn btn-dark float-right mr-4">Update</button>
            </div>
            
        </form>
        
    </div>
</div>

@endsection