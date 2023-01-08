@extends('layout.master')
@section('title', 'Operasional Pendidikan')
@section('breadcrumb1')
    <li class="breadcrumb-item">Operasional Pendidikan</li>
@endsection

@section('judul', '1. Biaya Operasional Pendidikan')

@section('content')

<!--A. Biaya Dosen-->
<hr>
<div class="card col-lg-10 col-6 mx-auto">
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
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
          
                <span class="text-white">{{ $byk = 0 }}</span>
                @foreach ($biayaOperationalPendidikan as $item)
                @if ($item->bagianTable == "A")
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
          <!--/.Table A-->
          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/biayaDosen/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->
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
                @foreach ($biayaOperationalPendidikan as $item)
                @if ($item->bagianTable == "B")
                <tr>
                    <td>{{ $byk+=1 }}</td>
                    <td>{{$item->mataAnggaran}}</td>
                    <td>{{$item->namaAnggaran}}</td>
                    
                    <td>
                        <div class="btn-group">
                            <a href="/gajiTenagaKependidikan/{{$item->id}}" class="btn btn-sm btn-primary "><i class="fa-regular fa-eye mr-1"></i>Detail</a>
                            <a href="/gajiTenagaKependidikan/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square mr-1"></i>Edit</a>
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
                @foreach ($biayaOperationalPendidikan as $item)
                @if ($item->bagianTable == "C")
                <tr>
                    <td>{{ $byk+=1 }}</td>
                    <td>{{$item->mataAnggaran}}</td>
                    <td>{{$item->namaAnggaran}}</td>
                    
                    <td>
                        <div class="btn-group">
                            <a href="/operasionalPembelajaran/{{$item->id}}" class="btn btn-sm btn-primary "><i class="fa-regular fa-eye mr-1"></i>Detail</a>
                            <a href="/operasionalPembelajaran/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square mr-1"></i>Edit</a>
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
                @foreach ($biayaOperationalPendidikan as $item)
                @if ($item->bagianTable == "D")
                <tr>
                    <td>{{ $byk+=1 }}</td>
                    <td>{{$item->mataAnggaran}}</td>
                    <td>{{$item->namaAnggaran}}</td>
                    
                    <td>
                        <div class="btn-group">
                            <a href="/operasionalTidakLangsung/{{$item->id}}" class="btn btn-sm btn-primary "><i class="fa-regular fa-eye mr-1"></i>Detail</a>
                            <a href="/operasionalTidakLangsung/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square mr-1"></i>Edit</a>
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