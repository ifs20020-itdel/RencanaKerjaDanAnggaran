@extends('layout.master')

@section('judul')
    Halaman Form Mahasiswa
@endsection

@section('title')
    Halaman ini berisikan form mahasiswa, diharapkan diisi dengan baik!
@endsection

@section('content')
<div class="container-fluid mx-5">
    <div class="row m-1">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register Today</h3>
                        <br>

                        <form action="/mahasiswa/form-hasil" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label for="nim">NIM</label>
                                <input class="form-control" type="text" name="nim" placeholder="Nomor Induk Mahasiswa" value="{{ old('nim') }}">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label for="name">Nama</label>
                               <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                            </div>
                            <br>
                            <label for="prodi">Program Studi</label>
                           <div class="col-md-12">
                                <select class="form-select" name="prodi" id="prodi"  value="{{ old('prodi') }}">
                                      <option selected disabled value="">Program Studi</option>
                                      <option value="S1 Informatika">S1 Informatika</option>
                                      <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                                      <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                                      <option value="S1 Bioproses">S1 Bioproses</option>
                                      <option value="S1 Manajemen Rekayasa">S1 Manajemen Rekayasa</option>
                                      <option value="D4 Teknologi Rekayasa Perangkat Lunak">D4 Teknologi Rekayasa Perangkat Lunak</option>
                                      <option value="D3 Teknologi Komputer">D3 Teknologi Komputer</option>
                                      <option value="D3 Teknologi Informasi">D3 Teknologi Informasi</option>
                               </select>
                           </div>
                           <br>
                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="angkatan">Angkatan: </label>
                            <br>
                            <input type="radio" class="btn-check" name="angkatan" id="2019" value="2019">
                            <label class="btn btn-sm btn-outline-secondary" name="angkatan" for="2019">2019</label>
                            <br>
                            <input type="radio" class="btn-check" name="angkatan" id="2020" value="2020">
                            <label class="btn btn-sm btn-outline-secondary" name="angkatan" for="2020">2020</label>
                            <br>
                            <input type="radio" class="btn-check" name="angkatan" id="2021" value="2021">
                            <label class="btn btn-sm btn-outline-secondary" name="angkatan" for="2021">2021</label>
                            <br>
                            <input type="radio" class="btn-check" name="angkatan" id="2022" value="2022">
                            <label class="btn btn-sm btn-outline-secondary" name="angkatan" for="2022">2022</label>
                    
                            </div>
                            <hr>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <br>
    <div class="container-fluid">
        <div class="row justify-center m-md-4">
            
                @include('mahasiswa.form-response') 
                
            
        </div>
    </div>
@endsection
