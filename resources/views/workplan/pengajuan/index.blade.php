@extends('layout.master')
@section('title', 'Pengajuan')
@section('breadcrumb1')
    <li class="breadcrumb-item">Pengajuan</li>
@endsection

@section('judulTengah', 'Ajukan Rencana Kerja Dan Anggaran')

@section('content')

<!--1. Biaya Operasional Pendidikan-->
<hr>
<div class="card ml-5 col-lg-11 col-6">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">1. Biaya Operasional Pendidikan </h3>
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
                    <div class="row">
                        <div class="d-lg-none">{{ $byk = 0 }}</div>
                        @foreach ($Pengajuan as $item)
                        @if ($item->jenis == "1A")
                        <div class="d-lg-none">{{ $byk+=1 }}</div>
                        <span class="hidden"></span>
                            <div class="col-12 col-sm-4 my-2">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="">
                                            <h2 class="lead"><b> nantiDIisi </b></h2>    
                                            <p class="text-muted text-sm"><b>Program: </b> {{Str::limit($item->rincianProgram, 30)}}</p>
                                        </div>
                                           
                                        <div class="">
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-sack-dollar mr-2"></i></span> {{$item->total}}</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-user mr-2"></i></span>{{$item->pemohon}}</li>
                                            </ul>
                                                
                                        </div>                            
                                    </div>
    
                                    @if($item->user_id == Auth::user()->id)
                                                        
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm btn-warning mr-3">
                                                <i class="fa-regular fa-pen-to-square mr-1"></i> Edit
                                            </a>
    
                                            <a href="/pengajuan/{{$item->id}}" class="btn btn-sm btn-primary">
                                                <i class="fa-regular fa-eye mr-1"></i> Detail
                                            </a>      
                                        </div>    
                                    </div>
                                                        
                                    @else
                                                    
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="/pengajuan/{{$item->id}}" class="btn btn-sm btn-primary">
                                                <i class="fa-regular fa-eye mr-1"></i> Detail
                                            </a>    
                                        </div>            
                                    </div>
                                                                    
                                    @endif
                                                
                                </div>  
                            </div>        
                       
                        @endif
                        @endforeach  
                            
                    </div>
                    @if ($byk == 0)
                            <div class="text-center">
                                <p>Belum Ada Program</p>
                            </div>
                                
                            @endif 
                  <!--/.Table A-->
                  <br>

                <!--Tambah Data-->
                <div class="card-footer">
                    <a href="/PDosen/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Input Program</button></a>
                </div>
                <!--/.Tambah Data-->
            </div>
        </div>
        <!--/Table A-->
    </div>    
</div>


@endsection