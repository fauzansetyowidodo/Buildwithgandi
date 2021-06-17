<?php
    if (isset($_SESSION['id_artikel'])) {
        $id_artikel =  $_SESSION['id_artikel'];
        $judul = $_POST['judul'];
       // $foto = $_POST['foto'];
        $isi = $_POST['isi'];
        $date = $_POST['tanggal'];
        $id_user = $_POST['id_user'];
        $id_kategori = $_POST['kategori_artikel'];
      
        $sql_f = "SELECT `foto` FROM `artikel` WHERE `id_artikel`='$id_artikel'";
        $query_f=mysqli_query($koneksi,$sql_f);
        while ($data_f = mysqli_fetch_row($query_f)) {
            $foto = $data_f[0];
        }
        if(empty($id_kategori)){
            header("Location:edit-artikel-data-".$id_artikel."_notif-artikelkosong");
        }else if(empty($judul)){
            header("Location:edit-artikel-data-".$id_artikel."_notif-judulkosong");
        }else if(empty($isi)){
            header("Location:edit-artikel-data-".$id_artikel."_notif-isikosong");
        }else{
            $lokasi_file = $_FILES['foto']['tmp_name'];
            $nama_file = $_FILES['foto']['name'];
            $direktori = 'cover/'.$nama_file;
            if(move_uploaded_file($lokasi_file,$direktori)){
                if(!empty($cover)){

                    unlink("cover/$cover");
                    }
                    $sql = "UPDATE `artikel` SET `judul_artikel`='$judul', `foto`='$nama_file', `isi`='$isi', `tanggal`='$date', `id_user`='$id_user', `id_kategori_artikel`='$id_kategori' 
                    WHERE `id_artikel` = '$id_artikel'";
                mysqli_query($koneksi,$sql);
            }else{
                $sql = "UPDATE `artikel` SET `judul_artikel`='$judul', `isi`='$isi', `tanggal`='$date', `id_user`='$id_user', `id_kategori_artikel`='$id_kategori' 
                WHERE `id_artikel` = '$id_artikel'";
                mysqli_query($koneksi,$sql);
            }
            header("Location:artikel_notif-editberhasil");
        } 
    }
?>