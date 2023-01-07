<!--
    NIM  : 11S20020
    Nama : Roosen Gabriel Manurung 
-->

@extends('layout.master')

@section('judul')
Halaman Daftar Buku
@endsection

@section('title')
    <a href="/buku/tambah-buku" class="btn btn-primary my-2">Tambah Buku</a>
@endsection

@section('content')
<div class="row">
    @forelse ($buku as $item)
    <div class="col-2 ml-4 my-4 mx-4">
        <div class="card" style="width: 18rem">
            <div class="card-body">
                <span class="badge badge-warning">{{$item->year}}</span>
                <h3 class="text-center"><strong>{{$item->title}}</strong><hr></h3>
                <h6 class="text-center"> by: {{Str::limit ($item->author, 30)}}</h6>
                <br>
                <h5 class="text-center mb-3"><i>Penerbit: {{$item->publisher}}</i></h5>
            </div>
            <a href="/buku/{{$item->id}}" class="btn btn-success btn-sm">Detail</a>
        </div>
    </div>
    <br><br>    
    @empty
    <h4>Data Buku belum ada</h4>
    @endforelse
    
</div>
@endsection
