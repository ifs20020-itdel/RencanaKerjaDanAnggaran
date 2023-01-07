@extends('layout.master')
@section('judul')
    <h1>Welcome To The Party!</h1>
@endsection

@section('title')
<p>Terima kasih telah bergabung di IT Del. Silahkan mengunjungi menu Mahasiswa atau Buku</p>
@endsection
@section('content')
        <ul>
            <li><a href="/mahasiswa/form-mahasiswa">Mahasiswa</a></li>
            <li><a href="/buku">Buku</a></li>
        </ul>
@endsection