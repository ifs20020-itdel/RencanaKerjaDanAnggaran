@extends('layout.master')
@section('title', 'Operasional Pendidikan')
@section('breadcrumb1')
    <li class="breadcrumb-item">Operasional Pendidikan</li>
@endsection

@section('judul', '1. Biaya Operasional Pendidikan')

@section('content')

@include('pendidikan.a.biayaDosenGenre')
@include('pendidikan.b.biayaTenagaKependidikanGenre')
@include('pendidikan.c.biayaOperasionalPembelajaranGenre')
@include('pendidikan.d.biayaOperasionalTidakLangsungGenre')
        
@endsection