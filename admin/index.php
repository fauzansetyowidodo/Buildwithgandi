<?php
  session_start();
  include('../koneksi/koneksi.php');
  if (isset($_GET["include"])) {
    $include = $_GET["include"];
    if ($include=="konfirmasi-login") {
      include("include/konfirmasilogin.php");
    }elseif ($include=="signout") {
      include("include/signout.php");
    }elseif ($include=="konfirmasi-tambah-kategori-kelas") {
      include("include/konfirmasitambahkategorikelas.php");
    }elseif ($include=="konfirmasi-edit-kategori-kelas") {
      include("include/konfirmasieditkategorikelas.php");
    }elseif ($include=="konfirmasi-tambah-kategori-artikel") {
      include("include/konfirmasitambahkategoriartikel.php");
    }elseif ($include=="konfirmasi-edit-kategori-artikel") {
      include("include/konfirmasieditkategoriartikel.php");
    }elseif ($include=="konfirmasi-tambah-penerbit") {
      include("include/konfirmasitambahpenerbit.php");
    }elseif ($include=="konfirmasi-edit-penerbit") {
      include("include/konfirmasieditpenerbit.php");
    }elseif ($include=="konfirmasi-tambah-artikel") {
      include("include/konfirmasitambahartikel.php");
    }elseif ($include=="konfirmasi-edit-artikel") {
      include("include/konfirmasieditartikel.php");
    }elseif ($include=="konfirmasi-edit-konten") {
      include("include/konfirmasieditkonten.php");
    }elseif ($include=="konfirmasi-tambah-user") {
      include("include/konfirmasitambahuser.php");
    }elseif ($include=="konfirmasi-edit-user") {
      include("include/konfirmasiedituser.php");
    }elseif ($include=="konfirmasi-edit-profil") {
      include("include/konfirmasieditprofil.php");
    }elseif ($include=="konfirmasi-tambah-konten") {
      include("include/konfirmasitambahkonten.php");
    }elseif ($include=="konfirmasi-edit-kelas") {
      include("include/konfirmasieditkelas.php");
    }elseif ($include=="konfirmasi-tambah-kelas") {
      include("include/konfirmasitambahkelas.php");
    }elseif ($include=="konfirmasi-tambah-mentor") {
      include("include/konfirmasitambahmentor.php");
    }elseif ($include=="konfirmasi-edit-mentor") {
      include("include/konfirmasieditmentor.php");
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?>
</head>
  <?php
    //cek ada get include
    if (isset($_GET["include"])) {
      $include = $_GET["include"];
      //cek apakah ada session id admin
      if (isset($_SESSION['id_user'])) {
        ?>
        <body class="hold-transition sidebar-mini layout-fixed">
          <div class="wrapper">
            <?php include("includes/header.php") ?>
            <?php include("includes/sidebar.php") ?>
            <div class="content-wrapper">
              <?php
                if ($include=="kategori-kelas") {
                  include("include/kategorikelas.php");
                }elseif ($include=="tambah-kategori-kelas") {
                  include("include/tambahkategorikelas.php");
                }elseif ($include=="edit-kategori-kelas") {
                  include("include/editkategorikelas.php");
                }elseif ($include=="kategori-artikel") {
                  include("include/kategoriartikel.php");
                }elseif ($include=="tambah-kategori-artikel") {
                  include("include/tambahkategoriartikel.php");
                }elseif ($include=="edit-kategori-artikel") {
                  include("include/editkategoriartikel.php");
                }elseif ($include=="konten") {
                  include("include/konten.php");
                }elseif ($include=="tambah-konten") {
                  include("include/tambahkonten.php");
                }elseif ($include=="edit-konten") {
                  include("include/editkonten.php");
                }elseif ($include=="detail-konten") {
                  include("include/detailkonten.php");
                }elseif ($include=="artikel") {
                  include("include/artikel.php");
                }elseif ($include=="tambah-artikel") {
                  include("include/tambahartikel.php");
                }elseif ($include=="edit-artikel") {
                  include("include/editartikel.php");
                }elseif ($include=="detail-artikel") {
                  include("include/detailartikel.php");
                }elseif ($include=="user") {
                  include("include/user.php");
                }elseif ($include=="tambah-user") {
                  include("include/tambahuser.php");
                }elseif ($include=="edit-user") {
                  include("include/edituser.php");
                }elseif ($include=="detail-user") {
                  include("include/detailuser.php");
                }elseif ($include=="ubah-password") {
                  include("include/ubahpassword.php");
                }elseif ($include=="edit-profil") {
                  include("include/editprofil.php");
                }elseif ($include=="kelas") {
                  include("include/kelas.php");
                }elseif ($include=="edit-kelas") {
                  include("include/editkelas.php");
                }elseif ($include=="detail-kelas") {
                  include("include/detailkelas.php");
                }elseif ($include=="tambah-kelas") {
                  include("include/tambahkelas.php");
                }elseif ($include=="mentor") {
                  include("include/mentor.php");
                }elseif ($include=="tambah-mentor") {
                  include("include/tambahmentor.php");
                }elseif ($include=="edit-mentor") {
                  include("include/editmentor.php");
                }elseif ($include=="detail-mentor") {
                  include("include/detailmentor.php");
                }
                else {
                  include("include/profil.php");
                }
              ?>
            </div>
            <!-- /.content-wrapper -->
            <?php include("includes/footer.php") ?>
          </div>
          <!-- ./wrapper-->
          <?php include("includes/script.php") ?>
        </body>
        <?php
        }else {
          //pemanggilan halaman form login
          include("include/login.php");
        }     
    }else {
      if (isset($_SESSION['id_user'])) {
        //pemanggilan ke halaman-halaman profil jika ada session
       ?>
       <body class="hold-transition sidebar-mini layout-fixed">
          <div class="wrapper">
          <?php include("includes/header.php") ?>
          <?php include("includes/sidebar.php") ?>
            <div class="content-wrapper">
              <?php
                //pemanggilan profil
                include("include/profil.php");
              ?>
            </div>
            <!-- /.content-wrapper -->
            <?php include("includes/footer.php") ?>
          </div>
            <!-- ./wrapper-->
            <?php include("includes/script.php") ?>
       </body>
      <?php  
      }else {
        //pemanggilan halaman form login
        include("include/login.php");
      }
    }
  ?>
</html>