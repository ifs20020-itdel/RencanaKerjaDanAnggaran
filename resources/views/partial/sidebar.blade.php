<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
    <a href="{{asset("/")}}" class="brand-link">
      <img src="{{asset("layout/dist/img/del.png")}}" alt="ITDel Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light d-flex flex-row">RKA - IT DEL 2023</span>
    </a>
 

  <!-- Sidebar -->
  <div class="sidebar">
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item mt-2">
          <a href="/" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item mt-2">
          <a href="/" class="nav-link">
            <i class="nav-icon fa-sharp fa-solid fa-list"></i>
            <p>
              List Pengajuan RKA
            </p>
          </a>
        </li>

        <!--JenisPenggunaan-->
        <li class="nav-item mt-2">
          <a href="/jenisPenggunaan" class="nav-link">
            <i class="nav-icon fa-solid fa-folder-tree"></i>
            <p>
              Jenis Penggunaan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-sharp fa-solid fa-hand-holding-dollar nav-icon"></i>
                <p>List Jenis Anggaran</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/addJenisPenggunaan" class="nav-link">
                <i class="fa-solid fa-plus nav-icon"></i>
                <p>Add Jenis Anggaran</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- Ajukan RKA -->
        <li class="nav-item mt-2">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-sack-dollar"></i>
            <p>
              Pengajuan RKA
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-sharp fa-solid fa-clipboard-list nav-icon"></i>
                <p>List Pengajuan</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/pengajuan" class="nav-link">
                <i class="fa-solid fa-paper-plane nav-icon"></i>
                <p>Ajukan Program</p>
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