@extends('layout.master')
@section('title', 'Anggaran')
@section('breadcrumb1')
    <li class="breadcrumb-item">Jenis Anggaran</li>
@endsection

@section('judul', 'Jenis Penggunaan Anggaran')

@section('content')

    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
          <li class="nav-item mr-4"><a class="nav-link active" href="#pendidikan" data-toggle="tab"><i class="fa-solid fa-school mr-2"></i>Pendidikan</a></li>
          <li class="nav-item mr-4"><a class="nav-link" href="#kemahasiswaan" data-toggle="tab"><i class="fa-sharp fa-solid fa-scale-balanced mr-2"></i>Kemahasiswaan</a></li>
          <li class="nav-item mr-4"><a class="nav-link" href="#penelitian" data-toggle="tab"><i class="fa-solid fa-book-open mr-2"></i>Penelitian</a></li>
          <li class="nav-item mr-4"><a class="nav-link" href="#PkM" data-toggle="tab"><i class="fa-brands fa-creative-commons-by mr-2"></i>PkM</a></li>
          <li class="nav-item mr-4"><a class="nav-link" href="#SDM" data-toggle="tab"><i class="fa-solid fa-brain mr-2"></i>SDM</a></li>
          <li class="nav-item mr-4"><a class="nav-link" href="#sarana" data-toggle="tab"><i class="fa-sharp fa-solid fa-vial-virus mr-2"></i>Sarana</a></li>
          <li class="nav-item"><a class="nav-link" href="#prasarana" data-toggle="tab"><i class="fa-solid fa-screwdriver-wrench nav-icon"></i>Prasarana</a></li>
        </ul>
      </div>

      <div class="card-body">
        <div class="tab-content">

          <div class="active tab-pane" id="pendidikan">
            <div class="post">

                <!--konten-->
                <div class="card-body">
                  pendidikan

                
                    
                    <br>
                    <!--Tambah Data-->
                    <div class="card-footer">
                        <a href="//create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
                    </div>
                    <!--/.Tambah Data-->

                </div>
                <!--/konten-->
            </div>
            <!-- /.post -->
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="kemahasiswaan">
            <div class="post">
                
                <!--konten-->
                <div class="card-body">
                    Kemahasiswaan
  
                  
                      
                      <br>
                      <!--Tambah Data-->
                      <div class="card-footer">
                          <a href="//create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
                      </div>
                      <!--/.Tambah Data-->
  
                  </div>
                  <!--/konten-->

              </div>
          </div>
          <!-- /.tab-pane -->

          <!-- /.tab-pane -->
          <div class="tab-pane" id="penelitian">
            <div class="post">
                <!--konten-->
                <div class="card-body">
                    penelitian
  
                  
                      
                      <br>
                      <!--Tambah Data-->
                      <div class="card-footer">
                          <a href="//create"><button type="submit" class="btn btn-success"><i class="fa-regular fa-plus mr-2"></i>Tambah Data</button></a>
                      </div>
                      <!--/.Tambah Data-->
  
                  </div>
                  <!--/konten-->
        
              </div>
          </div>
          <!-- /.tab-pane -->

          <!-- /.tab-pane -->
          <div class="tab-pane" id="PkM">
            <div class="post">
                <div class="ml-5">
  
                    pKm
                </div>
        
              </div>
          </div>
          <!-- /.tab-pane -->

          <!-- /.tab-pane -->
          <div class="tab-pane" id="SDM">
            <div class="post">
                <div class="ml-5">
  
                    Sdm
                </div>
        
              </div>
          </div>
          <!-- /.tab-pane -->

          <!-- /.tab-pane -->
          <div class="tab-pane" id="sarana">
            <div class="post">
                <div class="ml-5">
  
                    sarana
                </div>
        
              </div>
          </div>
          <!-- /.tab-pane -->

          <!-- /.tab-pane -->
          <div class="tab-pane" id="prasarana">
            <div class="post">
                <div class="ml-5">
  
                    prasarana
                </div>
        
              </div>
          </div>
          <!-- /.tab-pane -->


        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  @endsection