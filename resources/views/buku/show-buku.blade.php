<!--
    NIM  : 11S20020
    Nama : Roosen Gabriel Manurung 
-->

@extends('layout.master')

@section('judul')
    Deskripsi Buku
@endsection

@section('title')
    Halaman berisikan deskripsi buku <strong>{{$buku->title}}</strong>!
@endsection

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center"><strong>{{$buku->title}}</strong></h1>
            <h4 class="text-center mt-4">by: {{$buku->author}} <hr></h4>
            <div class="d-flex justify-content-center" style="height: 220px;">
                    <div class="vl m-4"></div>
                    <div class="vt m-4"></div>
                    <div class="vl m-4"></div>
                    <style>
                        .vt {
                            border: 3px solid rgb(155, 100, 28);
                            height: 180px;
                            width: 1px;
                            position: center; 
                        }
                        .vl {
                          border: 3px solid rgb(155, 100, 28);
                          height: 150px;
                          width: 1px;
                          position: center;
                        }
                        </style>
              </div>
            <hr>
            <h3 class="text-center">Penerbit: <i>{{$buku->publisher}}</i></h3>
            <h4 class="text-center">{{$buku->year}}</h4>
        </div>
    </div>
    <form action="/buku/{{$buku->id}}" method="POST">
        @method('DELETE')
        @csrf
        <div class="float-right">
            <input type="submit" class="btn btn-danger mx-3 mt-4 text-bold" value="Delete">  
            <a href="/buku/{{$buku->id}}/edit" class="btn btn-warning mx-3 mt-4"><strong>Edit</strong></a>
            <a href="/buku" class="btn btn-info mx-3 mt-4"><strong> Kembali </strong></a>
        </div>
    </form>
</div>
@endsection