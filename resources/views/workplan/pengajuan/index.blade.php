@extends('layout.master')
@section('title', 'Edit Jenis Anggaran')
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
                @foreach ($Pengajuan as $item)
                @if ($item->jenis == "1A")
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                      <div class="card-header text-muted border-bottom-0">
                        {{$item->pemohon}}
                      </div>
                      <div class="card-body pt-0">
                        <div class="row">
                          
                            <h2 class="lead"><b>Nicole Pearson</b></h2>
                            <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                            </ul>
                          
                        </div>
                      </div>
                      @if($item->user_id == Auth::user()->id)
                        <div class="card-footer">
                            <div class="text-right">
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="fa-regular fa-pen-to-square mr-1"></i> Edit
                            </a>
                            </div>
                        </div>
                      
                      @endif
                    </div>
                  </div>
                  @endif
                @endforeach
                  <!--/.Table A-->
                  <br>

                <!--Tambah Data-->
                <div class="card-footer">
                    <a href="/PDosen/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
                </div>
                <!--/.Tambah Data-->
        
            </div>
        
        </div>
        <!--/Table A-->
        
        

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
             
                  <br>

                <!--Tambah Data-->
                <div class="card-footer">
                    <a href="/jpTenagaKependidikan/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
                </div>
                <!--/.Tambah Data-->
        
            </div>
        
        </div>
        <!--/Table B-->
        


        <!--Table C-->
        <div class="card col-lg-11 col-6 mx-auto">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">C. Biaya Operasional Pembelajaran</h3>
                <div class="card-tools">    
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button> 
                </div>
            
            </div>
        
            <div class="card-body">
             

                  <br>

                <!--Tambah Data-->
                <div class="card-footer">
                    <a href="/jpPembelajaran/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
                </div>
                <!--/.Tambah Data-->
        
            </div>
        
        </div>
        <!--/Table C-->
        


        <!--Table D-->
        <div class="card col-lg-11 col-6 mx-auto">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">D. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Saraan, Uang Lembur, Telekomunikasi, Konsumsi, Transport, Pajak, Asuransi, dll)</h3>
                <div class="card-tools">    
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button> 
                </div>
            
            </div>
        
            <div class="card-body">
          

                  <br>

                <!--Tambah Data-->
                <div class="card-footer">
                    <a href="/jpBOTL/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
                </div>
                <!--/.Tambah Data-->
        
            </div>
        
        </div>
        <!--/Table D-->
    </div>
  </div>
  <!--/.A. Biaya Dosen-->

<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->



<br>

 <!--2. Biaya Operasional Kemahasiswaan-->
 <div class="card ml-5 col-lg-11 col-6">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">2. Biaya Operasional kemahasiswaan (Penalaran, Minat, Bakat, dan Kesejahteraan)</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      


          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/jpKemahasiswaan/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->

    </div>

</div>
  
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<br>

<!--3. Biaya Penelitian-->
<div class="card ml-5 col-lg-11 col-6">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">3. Biaya Penelitian</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      

          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/jpPenelitian/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->

    </div>

</div>
  
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<br>

<!--4. Biaya PkM-->
<div class="card ml-5 col-lg-11 col-6">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">4. Biaya PkM</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
      

          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/jpPkM/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->

    </div>

</div>
  
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


<br>

<!--5. Biaya SDM-->
<div class="card ml-5 col-lg-11 col-6">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">5. Biaya SDM</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
    

          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/jpSDM/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->

    </div>

</div>
  
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<br>


<!--6. Biaya Investasi Sarana-->
<div class="card ml-5 col-lg-11 col-6">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">6. Biaya Investasi Sarana</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
       


          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/jpSarana/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->

    </div>

</div>
  
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<br>

<!--7. Biaya Investasi Prasarana-->
<div class="card ml-5 col-lg-11 col-6">
    <div class="card-header">
        <h3 class="card-title font-weight-bold">7. Biaya Investasi Prasarana</h3>

        <div class="card-tools">    
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button> 
        </div>
    
    </div>

    <div class="card-body">
     


          <br>
        <!--Tambah Data-->
        <div class="card-footer">
            <a href="/jpPrasarana/create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
        </div>
        <!--/.Tambah Data-->

    </div>

</div>
  
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->



  @endsection