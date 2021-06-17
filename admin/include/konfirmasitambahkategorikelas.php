<?php
    $kategori_kelas = $_POST['kategori_kelas'];
    $deskripsi = $_POST['deskripsi'];
    if (empty($kategori_kelas)) {
        header("Location:tambah-kategori-kelas_notif-kategorikosong");
    }elseif (empty($deskripsi)) {
        header("Location:tambah-kategori-kelas_notif-deskripsikosong");
    } 
    else {
        $sql = "INSERT INTO `kategori_kelas` (`kategori_kelas`, `deskripsi`)
                VALUES  ('$kategori_kelas', '$deskripsi')";
        mysqli_query($koneksi, $sql);
        header("Location:kategori-kelas_notif-tambahberhasil");
    }
?>