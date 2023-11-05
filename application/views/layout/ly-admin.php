<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <ul class="ml-auto navbar-nav navbar-right">
          <h6 class="mt-2 mr-2 text-light" id="waktu"></h6>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url()?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo ucwords($this->session->nama) ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              
              <a href="<?php echo base_url('home/logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="active"><a class="nav-link" href="<?php echo base_url('home') ?>"><i class="fas fa-pencil-ruler"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Fitur</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>User</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url('user') ?>">Tabel User</a></li>
                  <li><a class="nav-link" href="<?php echo base_url('user/form') ?>">Tambah User</a></li>
                  <li><a class="nav-link" href="<?php echo base_url('user/importExc') ?>">Import Excel</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Kelas</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url('kelas') ?>">Tabel Kelas</a></li>
                  <li><a class="nav-link" href="<?php echo base_url('kelas/form') ?>">Tambah Kelas</a></li>
                </ul>
              </li><li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Paslon</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url('paslon') ?>">Tabel Paslon</a></li>
                  <li><a class="nav-link" href="<?php echo base_url('paslon/form') ?>">Tambah Paslon</a></li>
                </ul>
              </li>
            </ul>
        </aside>
      </div>
      <script>
        var waktu = document.getElementById('waktu');
      function refreshTime() {
        var dateString = new Date().toLocaleString();
        var formattedString = dateString.replace(", ", " - ");
        waktu.innerHTML = formattedString;
      }

      setInterval(refreshTime, 1);
      </script>