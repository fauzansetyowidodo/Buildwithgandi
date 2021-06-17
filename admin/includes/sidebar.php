<?php

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminKatalog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="profil" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="kategori-kelas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kategori-artikel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Artikel</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="konten" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Konten
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="kelas" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="artikel" class="nav-link">
              <i class="nav-icon fab fa-blogger"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="mentor" class="nav-link">
              <i class="nav-icon fab fa-blogger"></i>
              <p>
                Mentor
              </p>
            </a>
          </li>
          <?php
          if (isset($_SESSION['level'])){
            if ($_SESSION['level']=="Superadmin"){?>
            <li class="nav-item">
              <a href="user" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
                <p>Pengaturan User</p>
              </a>
            </li>
          <?php }} ?>
          <li class="nav-item">
            <a href="ubah-password" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Ubah password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="signout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>