<!--
    NIM  : 11S20020
    Nama : Roosen Gabriel Manurung 
-->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset("/")}}" class="brand-link">
      <img src="{{asset("layout/dist/img/del.png")}}" alt="ITDel Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">IT DEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-people-arrows"></i>
              <p>
                Mahasiswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/mahasiswa/form-mahasiswa" class="nav-link">
                  <i class="fa fa-paper-plane nav-icon"></i>
                  <p>Form Mahasiswa</p>
                </a>
              </li>    
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
              <p>
                Buku
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/buku" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Daftar Buku</p>
                </a>
              </li>    
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/buku/tambah-buku" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Tambah Buku</p>
                </a>
              </li>    
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>