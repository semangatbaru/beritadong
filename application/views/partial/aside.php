<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('gambar/') ?>iconadmin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?php echo site_url('Welcome') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Home
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Berita') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
         
          <li class="nav-item has-treeview">
            <a href="<?php echo site_url('Kategori') ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Kategori
              </p>
            </a>
            <li class="nav-item">
            <a href="<?php echo site_url('Registrasi') ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Registrasi
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo site_url('auth/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>                
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>