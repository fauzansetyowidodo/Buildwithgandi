<?php
    $kategori_artikel = $_POST['kategori_artikel'];
    if (empty($kategori_artikel)) {
        header("Location:tambah-kategori-artikel_notif-kategorikosong");
    }else {
        $sql = "INSERT INTO `kategori_artikel` (`kategori_artikel`) VALUES ('$kategori_artikel')";
        mysqli_query($koneksi, $sql);
        header("Location:kategori-artikel_notif-tambahberhasil");
    }
?>