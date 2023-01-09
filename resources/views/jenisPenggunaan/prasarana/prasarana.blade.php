@extends('layout.master')
@section('title', 'Prasarana')
@section('breadcrumb1')
    <li class="breadcrumb-item">Biaya Investasi Prasarana</li>
@endsection

@section('judul', '7. Biaya Investasi Prasarana')

@section('content')
<hr>
<div class="card col-lg-10 col-6 mx-auto">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">Daftar Jenis Penggunaan Anggaran</h3>
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
            
                @forelse ($prasaranaBOP as $key => $item)
                <tr>
                    <td>{{$key + 1 }}</td>
                    <td>{{$item->mataAnggaran}}</td>
                    <td>{{$item->namaAnggaran}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="/prasarana/{{$item->id}}" class="btn btn-sm btn-primary "><i class="fa-regular fa-eye mr-1"></i>Detail</a>
                            <a href="/prasarana/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fa-regular fa-pen-to-square mr-1"></i>Edit</a>
                            <form action="/prasarana/{{$item->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger ml-4"><i class="fa-solid fa-trash mr-1"></i>Delete</button>
                            </form>
                        </div>
                    </td>
                    
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center p-3 table-active">
                        Data Jenis Penggunaan Anggaran Belum Ditambahkan
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>
          <!--/.Table A-->
          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/prasarana/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->
    </div>

  </div>
@endsection