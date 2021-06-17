<?php
    $id_kategori_kelas = $_POST['id_kategori_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $deskripsi = $_POST['deskripsi'];
    $id_mentor = $_POST['id_mentor'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'foto_kelas/'.$nama_file;

    if (empty($id_kategori_kelas)) {
        header("Location:tambah-kelas_notif-kategorikosong");
    }elseif (empty($deskripsi)) {
        header("Location:tambah-kelas_notif-deskripsikosong");
    }elseif (empty($id_mentor)) {
        header("Location:tambah-kelas_notif-mentorkosong");
    }elseif (empty($nama_kelas)) {
        header("Location:tambah-kelas_notif-namakosong");
    }elseif(move_uploaded_file($lokasi_file,$direktori)) {
        $sql ="INSERT INTO kelas (id_kategori_kelas, nama_kelas, deskripsi, id_mentor, foto) 
        VALUES ('$id_kategori_kelas', '$nama_kelas', '$deskripsi', '$id_mentor', '$nama_file')";    
        mysqli_query($koneksi,$sql);
        header("Location:kelas_notif-tambahberhasil");
    }else if(empty($foto)) {
       
        header("Location:tambah-kelas_notif-fotokosong");
    }
?>