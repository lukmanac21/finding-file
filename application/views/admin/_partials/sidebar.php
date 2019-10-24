 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Berkas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <nav class="mt-2>">
          <li class="nav-item">
            <br>
            <a style="margin-left : 20px ;" class="nav_link" href="<?php echo site_url('login/logout'); ?>"><span>Logout</a>
          </li>
        </nav>
      </ul>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('admin/Judul/index');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Judul</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/Kategori/index');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('admin/Tempat/index');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tempat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/Berkas/index');?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Berkas
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>