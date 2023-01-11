@extends('layout.master')
@section('title', 'Anggaran')
@section('breadcrumb1')
    <li class="breadcrumb-item">Anggaran</li>
@endsection

@section('judulTengah', 'Daftar Anggaran')

@section('content')
<div class="card ml-5 col-lg-11 col-6">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">Berikut Panduan Template RKA  <a href="https://docs.google.com/spreadsheets/d/140zs3W8NE7GwuaQlNXegL6atDtKjO4y7/edit#gid=712992635" target="_blank"><span class="badge badge-success ml-1">Template RKA</span></a></h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
    
        <table class="table ml-5 col-lg-11 col-6">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Mata Anggaran</th>
                <th scope="col">Nama Anggaran</th>
                <th scope="col">Total Pengajuan</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                <span class="text-white">{{ $byk = 0 }}</span>
                @foreach ($Penggunaan as $item)
                @if ($item->bagianTable == "2")
                <tr>
                    <td style="width:10%">{{ $byk+=1 }}</td>
                    <td style="width:15%">{{$item->mataAnggaran}}</td>
                    <td style="width:50%">{{$item->namaAnggaran}}</td>
                    <td style="width:15%"></td>
                    
                    <td style="width:10%">
                        <div class="btn-group">
                            <a href="/addJenisPenggunaan/{{$item->id}}" class="btn btn-sm btn-primary "><i class="fa-regular fa-eye mr-1"></i>Detail</a>
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

    </div>
</div>
@endsection