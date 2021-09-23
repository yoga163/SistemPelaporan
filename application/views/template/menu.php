<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Pelaporan Sendangguwo</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Admin/') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item - Charts -->
      <!--akses admin-->
      <?php if($this->session->userdata('akses')=='1'):?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Admin/laporan') ?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Laporan</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Admin/anggota') ?>">
          <i class="fas fa-fw fa-book"></i>
          <span>User</span></a>
      </li>
        
      <!--akses user-->
      <?php elseif($this->session->userdata('akses')=='2'):?>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Admin/laporan') ?>">
        <i class="fas fa-fw fa-book"></i>
        <span>Laporan</span></a>
      </li>
      
      <?php endif?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>Admin/setting">
          <i class="fas fa-fw fa-cog"></i>
          <span>Setting</span></a>
      </li>
      <li class="nav-item">
          <li class="nav-item">
          <a class="nav-link" data-toggle="modal" href="#modalLogout">
          <i class="fas fa-fw fa-arrow-circle-left"></i>
          <span>Logout</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
       

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
        <!--Modal-->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalLogout">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Yakin Akan Logout?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer">
            <a class="btn btn-danger" href="<?php echo base_url('Login/logout') ?>">Logout</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
          </div>
          </div>
        </div>
      </div>            
      <div class="container-fluid">

          
        <!-- Content Row -->
      <div class="row">
      </div>
      <!-- End of Main Content -->