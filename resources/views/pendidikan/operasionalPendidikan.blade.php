@extends('layout.master')
@section('title', 'Operasional Pendidikan')
@section('breadcrumb1')
    <li class="breadcrumb-item">Operasional Pendidikan</li>
@endsection

@section('judul', '1. Biaya Operasional Pendidikan')

@section('content')


<!--A. Biaya Dosen-->
<div class="card">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">A. Biaya Dosen (Gaji dan Honor)</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      
        <!--Table A-->
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Mata Anggaran</th>
                <th scope="col">Nama Anggaran</th>
              </tr>
            </thead>
            <tbody>
          
                @forelse ($biayaDosenGenre as $key => $item)
                    <tr>
                        <td>{{$key = 1}}</td>
                        <td>{{$item->mataAnggaran}}</td>
                        <td>{{$item->namaAnggaran}}</td>
                    </tr>
                @empty
                    
                @endforelse

            </tbody>
          </table>
          <!--/.Table A-->

    </div>

  </div>
  <!--/.A. Biaya Dosen-->

  <br>


  <!--B. Biaya Tenaga Kependidikan-->
  <div class="card">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">B. Biaya Tenaga Kependidikan (Gaji dan Honor)</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      asjdlkajdlkasjd
    </div>
 
  </div>
  <!--/. B. Biaya Tenaga Kependidikan-->

<br>

  <!--C. Biaya Operasional Pembelajaran-->
  <div class="card">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">C. Biaya Operasional Pembelajaran</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      asjdlkajdlkasjd
    </div>

  </div>
  <!--/.C. Biaya Operasional Pembelajaran-->

  <br>


  <!--D. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport, Pajak, Asuransi, dll)-->
  <div class="card">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">D. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport, Pajak, Asuransi, dll)</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      asjdlkajdlkasjd
    </div>
 
  </div>
  <!--/.D. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport, Pajak, Asuransi, dll)-->
  <div class="card-footer">
    <button type="submit" class="btn btn-dark float-right">Kembali</button>
</div>

@endsection