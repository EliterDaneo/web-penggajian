<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-money-bill-wave"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PENGGAJIAN <sup>MUTU</sup></div>
      </a>


      <?php if ($this->session->userdata('role') == 1) { ?>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url('admin/DashboardController') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Master Data
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-database"></i>
            <span>Data Master</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Components:</h6>
              <a class="collapse-item" href="<?= base_url('admin/DataGukar') ?>">Daftar Gukar Master</a>
              <a class="collapse-item" href="<?= base_url('admin/DataGukarFix') ?>">Daftar Gukar Fix</a>
              <a class="collapse-item" href="<?= base_url('admin/DataGolongan') ?>">Golongan</a>
              <a class="collapse-item" href="<?= base_url('admin/DataJabatan') ?>">Jabatan</a>
              <a class="collapse-item" href="<?= base_url('admin/DataEkstra') ?>">Guru Extra</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#guru" aria-expanded="true"
            aria-controls="guru">
            <i class="fas fa-database"></i>
            <span>Data Gukar</span>
          </a>
          <div id="guru" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Components:</h6>
              <a class="collapse-item" href="<?= base_url('admin/DataGukar') ?>">Daftar Gukar</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tunjangan" aria-expanded="true"
            aria-controls="tunjangan">
            <i class="fas fa-database"></i>
            <span>Data Tunjangan</span>
          </a>
          <div id="tunjangan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Data Karir</h6>
              <a class="collapse-item" href="<?= base_url('admin/DataGolongan') ?>">Daftar Golongan</a>
              <a class="collapse-item" href="<?= base_url('admin/DataJabatan') ?>">Daftar Jabatan</a>
              <a class="collapse-item" href="<?= base_url('admin/DataEkstra') ?>">Daftar Ekstra</a>
              <a class="collapse-item" href="<?= base_url('admin/DataWaliKelas') ?>">Daftar Wali Kelas</a>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-money-check"></i>
            <span>Traksaksi</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Data Sensitif</h6>
              <a class="collapse-item" href="<?= base_url('admin/DataTransport') ?>">Data Transport & <br>Tunjangan &
                <br>Potongan</a>
              <a class="collapse-item" href="<?= base_url('admin/DataGaji') ?>">Data Gaji</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-book"></i>
            <span>Laporan</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Menu Laporan:</h6>
              <a class="collapse-item" href="<?= base_url('admin/LaporanGaji') ?>">Data Transport & <br>Tunjangan &
                <br>Potongan & Gaji</a>
              <a class="collapse-item" href="<?= base_url('admin/LaporanGaji/SlipGaji') ?>">Slip Gaji</a>
            </div>
          </div>
        </li>
      <?php } else if ($this->session->userdata('role') == 2) { ?>
          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('sdm/Dashboard') ?>">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Master Data
          </div>
          <li class="nav-item <?= is_active('DataGukar') ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#guru" aria-expanded="true"
              aria-controls="guru">
              <i class="fas fa-database"></i>
              <span>Data Gukar</span>
            </a>
            <div id="guru" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item <?= is_active('DataGukar') ?>" href="<?= base_url('admin/DataGukar') ?>">Daftar
                  Gukar</a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tunjangan" aria-expanded="true"
              aria-controls="tunjangan">
              <i class="fas fa-database"></i>
              <span>Data Tunjangan</span>
            </a>
            <div id="tunjangan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Karir</h6>
                <a class="collapse-item" href="<?= base_url('admin/DataGolongan') ?>">Daftar Golongan</a>
                <a class="collapse-item" href="<?= base_url('admin/DataJabatan') ?>">Daftar Jabatan</a>
                <a class="collapse-item" href="<?= base_url('admin/DataEkstra') ?>">Daftar Ekstra</a>
                <a class="collapse-item" href="<?= base_url('admin/DataWaliKelas') ?>">Daftar Wali Kelas</a>
              </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('sdm/DataGaji') ?>">
              <i class="fas fa-money-bill-wave"></i>
              <span>Slip Gaji</span></a>
          </li>
      <?php } else if ($this->session->userdata('role') == 3) { ?>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('bendahara/Dashboard') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
              Master Data
            </div>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-money-check"></i>
                <span>Traksaksi</span>
              </a>
              <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Data Sensitif</h6>
                  <a class="collapse-item" href="<?= base_url('admin/DataTransport') ?>">Data Transport & <br>Tunjangan &
                    <br>Potongan</a>
                  <a class="collapse-item" href="<?= base_url('admin/DataGaji') ?>">Data Gaji</a>
                </div>
              </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                aria-controls="collapsePages">
                <i class="fas fa-book"></i>
                <span>Laporan</span>
              </a>
              <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Menu Laporan:</h6>
                  <a class="collapse-item" href="<?= base_url('admin/LaporanGaji') ?>">Data Transport & <br>Tunjangan &
                    <br>Potongan & Gaji</a>
                  <a class="collapse-item" href="<?= base_url('admin/LaporanGaji/SlipGaji') ?>">Slip Gaji</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('bendahara/DataGaji') ?>">
                <i class="fas fa-money-bill-wave"></i>
                <span>Slip Gaji</span></a>
            </li>
      <?php } else { ?>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('gukar/Dashboard') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
              Master Data
            </div>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('gukar/DataGaji') ?>">
                <i class="fas fa-money-bill-wave"></i>
                <span>Slip Gaji</span></a>
            </li>
      <?php } ?>
      <hr class="sidebar-divider d-none d-md-block">

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

          <!-- Topbar Search -->
          <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <marquee behavior="" direction="">Sistem Penggajian SMK MUTU WONOSOBO</marquee>
            </div>
          </div>


          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat datang :
                <?php echo $this->session->userdata('nama_pegawai') ?>
              </span>
              <img class="img-profile rounded-circle" src="<?= base_url('asset/img/undraw_profile.svg') ?>">
              <!-- <img class="img-profile rounded-circle" src="<?= base_url('asset/img/photos/') . $this->session->userdata('foto') ?>"> -->
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>

          </ul>

        </nav>
        <!-- End of Topbar -->