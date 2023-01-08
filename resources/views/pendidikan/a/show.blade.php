@extends('layout.master')

@section('title')
    {{$biayaDosenGenre->mataAnggaran}}
@endsection

@section('breadcrumb1')
    <li class="breadcrumb-item"><a href="/biayaOperasionalPendidikan">Operasional Pendidikan</a></li>
@endsection
@section('breadcrumb2')
    <li class="breadcrumb-item">{{$biayaDosenGenre->mataAnggaran}}</li>
@endsection

@section('judul')
A. Biaya Dosen (Gaji dan Honor): &nbsp; {{$biayaDosenGenre->mataAnggaran}} - {{$biayaDosenGenre->namaAnggaran}}
@endsection

@section('content')

<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Pengajuan RKA untuk Anggaran : <strong>{{$biayaDosenGenre->namaAnggaran}}</strong></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            <div class="row">
              <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                  <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Daftar pengajuan </span>
                    <span class="info-box-number text-center text-muted mb-0">Nanti DIUPDATE</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                  <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">DAftarPengjuan</span>
                    <span class="info-box-number text-center text-muted mb-0">Nanti Diupdate</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                  <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Estimated project duration</span>
                    <span class="info-box-number text-center text-muted mb-0">20</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <a href="/biayaOperasionalPendidikan"><button type="submit" class="btn btn-dark float-right"><i class="fa-sharp fa-solid fa-backward-step mr-2"></i>Kembali</button></a>
    </div>

    </div>
    <!-- /.card -->

  </section>

@endsection