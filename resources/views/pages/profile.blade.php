@extends('layout.master')
@section('title', 'Profile')
@section('breadcrumb1')
    <li class="breadcrumb-item">Profile</li>
@endsection

@section('judul', 'Halaman Profile')

@section('content')
 <!-- small box -->
<!-- ./col -->
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
            <!-- Profile card-body -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <h3 class="profile-username text-center">{{ Auth::user()->nama }}</h3>
                    <p class="text-muted text-center">{{ Auth::user()->jabatan_fungsional}}</p>
                </div>
            <!-- /.card-body -->
          </div>
        
        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item mr-3"><a class="nav-link active" href="#activity" data-toggle="tab"><i class="fa-solid fa-user mr-2"></i>Biodata</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"><i class="fa-solid fa-paper-plane mr-2"></i>Semua Pengajuan</a></li>
              </ul>
            </div>

            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <div class="post">
                    <div class="ml-5">

                        <table class="table mt-4">
                              <tr>
                                <th>Nama</th>
                                <td>{{ Auth::user()->nama }}</td>
                              </tr>
                              <tr>
                                <th>NIP</th>
                                <td>{{ Auth::user()->nip }}</td>
                              </tr>

                              <tr>
                                <th>NIDN</th>
                                <td>{{ Auth::user()->nidn}}</td>
                              </tr>

                              <tr>
                                <th>Fakultas</th>
                                <td>
                                    @if (Auth::user()->prodi == 'S1 Informatika' || Auth::user()->prodi == 'S1 Sistem Informasi' || Auth::user()->prodi == 'S1 Teknik Elektro')
                                    Fakultas Informatika dan Teknik Elektro
                                    @elseif (Auth::user()->prodi == 'S1 Manajemen Rekayasa')
                                    Fakultas Teknik Industri
                                    @elseif (Auth::user()->prodi == 'S1 Teknik Bioproses')
                                    Fakultas Bioteknologi
                                    @elseif (Auth::user()->prodi == 'DIII Teknologi Komputer' || Auth::user()->prodi == 'DII Teknologi Informasi' || Auth::user()->prodi == 'DIV Teknologi Rekayasa Perangkat Lunak')
                                    Fakultas Vokasi
                                    @endif   
                                </td>
                              </tr>

                              <tr>
                                <th>Program Studi</th>
                                <td>{{ Auth::user()->prodi }}</td>
                              </tr>

                              <tr>
                                <th>Jabatan Fungsional</th>
                                <td>{{ Auth::user()->jabatan_fungsional }}</td>
                              </tr>

                              <tr>
                                <th>Status Keaktifan</th>
                                <td>
                                    @if (Auth::user()->keaktifan == 'A')
                                    Aktif
                                    @else
                                    Keluar
                                    @endif
                                </td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                              </tr>
                          </table>
                    </div>
            
                  </div>
                  <!-- /.post -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                    <!-- RKA label -->
                  <p>semua Pengajuan</p>
                    <!-- /.RKA-label -->
                </div>
                <!-- /.tab-pane -->


              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>

        
@endsection