@extends('layout.master')

@section('judul')
    Data Mahasiswa
@endsection

@section('title')
    Halaman ini berisikan data dari form mahasiswa, terimakasih telah mengisi!
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="my-4 text-center">Data Yang Di Input </h3>

                    <table class="table table-bordered table-striped">
                        <tr>
                            <td style="width:150px">Nim</td>
                            <td>{{ $data->nim }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $data->nama }}</td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td>{{ $data->prodi }}</td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td>{{ $data->angkatan }}</td>
                        </tr>
                    </table>
                    <br>
                    <a href="/mahasiswa/form-mahasiswa" class="float-right btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection