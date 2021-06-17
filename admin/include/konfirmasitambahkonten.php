<?php
    $foto = $_POST['foto'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'cover_konten/'.$nama_file;

    if (empty($judul)) {
        header("Location:tambah-konten_notif-judulkosong");
    }elseif (empty($isi)) {
        header("Location:tambah-konten_notif-isikosong");
    }elseif (move_uploaded_file($lokasi_file,$direktori)) {
        
         $sql = "INSERT INTO `konten` (`foto_konten`, `judul`, `isi`) VALUES ('$nama_file', '$judul', '$isi')";
            mysqli_query($koneksi,$sql);
            header("Location:konten_notif-tambahberhasil");
            
    }else if(empty($foto)) {
        
        header("Location:tambah-konten_notif-fotokosong");
    }     
 
?>