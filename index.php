<?php
  include("koneksi/koneksi.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include ("includes/head.php");?>
</head>
<body>
  <?php
    include("includes/navigasi.php");
    //pemanggilan konten halaman index
    if (isset($_GET["include"])) {
      $include = $_GET["include"];
        if ($include=="mentor") {
          include("include/mentor.php");
        }elseif ($include=="detail-mentor") {
          include("include/detailmentor.php");
        }elseif ($include=="kelas") {
          include("include/kelas.php");
        }elseif ($include=="detail-kelas") {
          include("include/detailkelas.php");
        }elseif ($include=="about-us") {
          include("include/aboutus.php");
        }elseif ($include=="artikel") {
          include("include/artikel.php");
        }elseif ($include=="detail-artikel") {
          include("include/detailartikel.php");
        }elseif ($include=="daftar-artikel-kategori") {
          include("include/daftarartikel.php");
        }elseif ($include=="daftar-artikel-arsip") {
          include("include/daftarartikel.php");
        }elseif ($include=="daftar-buku-kategori") {
          include("include/daftarbuku.php");
        }elseif ($include=="daftar-buku-tag") {
          include("include/daftarbuku.php");
        }elseif ($include=="daftar-blog-kategori") {
          include("include/daftarblog.php");
        }elseif ($include=="daftar-blog-arsip") {
          include("include/daftarblog.php");
        }elseif ($include=="daftar-buku-cari") {
          include("include/daftarbuku.php");
        }elseif ($include=="detail-penulis") {
          include("include/detailpenulis.php");
        }elseif ($include=="about-us") {
          include("include/aboutus.php");
        }
        else {
          include("include/index.php");
        }
    }else {
      include("include/index.php");
    }
  ?>
  <?php include ("includes/footer.php"); ?>
  <!-- Optional JavaScript; choose one of the two! -->
  <?php include("includes/script.php"); ?>
</body>
</html>