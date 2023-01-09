@extends('layout.master')
@section('title', 'Edit Jenis Anggaran')
@section('breadcrumb1')
    <li class="breadcrumb-item">Edit Jenis Penggunaan Anggaran</li>
@endsection

@section('judulTengah', 'Edit Jenis Penggunaan Anggaran')

@section('content')

<!--A. Biaya Dosen-->
<hr>
<div class="card ml-5 col-lg-11 col-6">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">1. Biaya Operasional Pendidikan</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      
         <!--Table A-->
        <div class="card col-lg-11 col-6 mx-auto">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">A. Biaya Dosen (Gaji Dan Honor)</h3>
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
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        <span class="text-white">{{ $byk = 0 }}</span>
                        @foreach ($JenisPenggunaan as $item)
                        @if ($item->bagianTable == "1A")
                        <tr>
                            <td>{{ $byk+=1 }}</td>
                            <td>{{$item->mataAnggaran}}</td>
                            <td>{{$item->namaAnggaran}}</td>
                            
                            <td>
                                <div class="btn-group">
                                    <a href="/jpDosen/{{$item->id}}" class="btn btn-sm btn-primary "><i class="fa-regular fa-eye mr-1"></i>Detail</a>
                                    <a href="/jpDosen/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square mr-1"></i>Edit</a>
                                    <form action="/addJenisPenggunaan/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger ml-4"><i class="fa-solid fa-trash mr-1"></i>Delete</button>
                                    </form>
                                </div>
                            </td>
                            
                        </tr>
                        @endif
                            @endforeach
                        @if ($byk == 0)
                        <tr>
                            <td colspan="7" class="text-center p-3 table-active">
                                Data Jenis Penggunaan Anggaran Belum Ditambahkan
                            </td>
                        </tr>
                        @else
                        
                        @endif 
        
                    </tbody>
                </table>
                  <!--/.Table A-->
                  <br>

                <!--Tambah Data-->
                <div class="card-footer">
                    <a href="/jpDosen/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
                </div>
                <!--/.Tambah Data-->
        
            </div>
        
        </div>
        <!--/Table A-->
        
        <br>

        <!--Table B-->
        <div class="card col-lg-11 col-6 mx-auto">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">B. Gaji Tenaga Kependidikan Dosen (Gaji Dan Honor)</h3>
                <div class="card-tools">    
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button> 
                </div>
            
            </div>
        
            <div class="card-body">
                <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Mata Anggaran</th>
                        <th scope="col">Nama Anggaran</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        <span class="text-white">{{ $byk = 0 }}</span>
                        @foreach ($JenisPenggunaan as $item)
                        @if ($item->bagianTable == "1B")
                        <tr>
                            <td>{{ $byk+=1 }}</td>
                            <td>{{$item->mataAnggaran}}</td>
                            <td>{{$item->namaAnggaran}}</td>
                            
                            <td>
                                <div class="btn-group">
                                    <a href="/biayaDosen/{{$item->id}}" class="btn btn-sm btn-primary "><i class="fa-regular fa-eye mr-1"></i>Detail</a>
                                    <a href="/biayaDosen/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square mr-1"></i>Edit</a>
                                    <form action="/biayaOperasionalPendidikan/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger ml-4"><i class="fa-solid fa-trash mr-1"></i>Delete</button>
                                    </form>
                                </div>
                            </td>
                            
                        </tr>
                        @endif
                            @endforeach
                        @if ($byk == 0)
                        <tr>
                            <td colspan="7" class="text-center p-3 table-active">
                                Data Jenis Penggunaan Anggaran Belum Ditambahkan
                            </td>
                        </tr>
                        @else
                        
                        @endif 
        
                    </tbody>
                </table>
                  <br>

                <!--Tambah Data-->
                <div class="card-footer">
                    <a href="/jpDosen/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
                </div>
                <!--/.Tambah Data-->
        
            </div>
        
        </div>
        <!--/Table B-->

        <!--Table C-->
        <!--/Table C-->

        <!--Table D-->
        <!--/Table D-->


    </div>
  </div>
  <!--/.A. Biaya Dosen-->

<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<br>
<br>

 <!--B. Gaji Tenaga Kependidikan (Gaji Dan Honor)-->
 <div class="card col-lg-10 col-6 mx-auto">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">B. Gaji Tenaga Kependidikan (Gaji Dan Honor)</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      
          <!--Table B-->
       
          <!--/.Table B-->
          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/gajiTenagaKependidikan/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->

    </div>

  </div>
  <!--/.B. Gaji Tenaga Kependidikan (Gaji Dan Honor)-->

<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<br>
<br>

  <!--C. Biaya Operasional Pembelajaran-->
  <div class="card col-lg-10 col-6 mx-auto">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">C. Biaya Operasional Pembelajaran</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      
          <!--Table C-->
       
          <!--/.Table C-->
          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/operasionalPembelajaran/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->

    </div>

  </div>
  <!--/.C. Biaya Operasional Pembelajaran-->

  <br>
  <br>

  <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


  <!--D. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport, Pajak, Asuransi, dll)-->
  <div class="card col-lg-10 col-6 mx-auto">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">D. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport, Pajak, Asuransi, dll)</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      
          <!--Table D-->
      
          <!--/.Table D-->
          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/operasionalTidakLangsung/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->

    </div>
 
  </div>
  <!--/.D. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport, Pajak, Asuransi, dll)-->


  @endsection