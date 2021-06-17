<?php
    $foto = $_POST['foto'];
    $id_user = $_POST['id_user'];
    $date = $_POST['tanggal'];
    $id_kategori = $_POST['kategori_artikel'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'cover/'.$nama_file;
    if (empty($id_kategori)) {
        header("Location:tambah-artikel_notif-artikelkosong");
    }elseif (empty($judul)) {
        header("Location:tambah-artikel_notif-judulkosong");
    }elseif (empty($isi)) {
        header("Location:tambah-artikel_notif-isikosong");
    }elseif (!move_uploaded_file($lokasi_file,$direktori)) {
        header("Location:tambah-artikel_notif-fotokosong");;

    }else {
        $sql = "INSERT INTO `artikel` (`id_kategori_artikel`, `id_user`, `tanggal`, `judul_artikel`, `isi`, `foto`) 
        VALUES ('$id_kategori', '$id_user', '$date', '$judul', '$isi', '$nama_file')";
        mysqli_query($koneksi,$sql);
       // $id_artikel = mysqli_insert_id($koneksi);
       header("Location:artikel_notif-tambahberhasil");
    }
   
?>
        
    
