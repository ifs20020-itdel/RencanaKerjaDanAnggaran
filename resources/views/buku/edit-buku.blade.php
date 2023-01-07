<!--
    NIM  : 11S20020
    Nama : Roosen Gabriel Manurung 
-->

@extends('layout.master')

@section('judul')
    Edit Buku
@endsection

@section('title')
    Halaman ini digunakan untuk Edit Data Buku!
@endsection

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="/buku/{{$buku->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h1 class="text-center mb-5">Tambah Buku <hr></h1>

                <div class="mb-3 row">
                    <label name="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$buku->title}}" name="title">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label name="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$buku->author}}" name="author">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label name="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="publisher" value="{{$buku->publisher}}">
                    </div>
                </div>
            

                <div class="mb-3 row">
                    <label name="tahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$buku->year}}" name="year">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Simpan Buku</button>
                <a href="/buku" class="btn btn-warning mx-5 mt-4">Kembali</a>
            </form>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
                @include('buku.buku-response') 
        </div>
    </div>
</div>

@endsection