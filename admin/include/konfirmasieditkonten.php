<?php
    if (isset($_SESSION['id_konten'])) {
        $id_konten = $_SESSION['id_konten'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

        $sql_f = "SELECT `foto_konten` FROM `konten` WHERE `id_konten`='$id_konten'";
        $query_f=mysqli_query($koneksi,$sql_f);
        while ($data_f = mysqli_fetch_row($query_f)) {
            $cover = $data_f[0];
        }
        if (empty($judul)) {
            header("Location:edit-konten-data-".$id_konten."_notif-judulkosong");
        }elseif (empty($isi)) {
            header("Location:edit-konten-data-".$id_konten."_notif-isikosong");
        }
        else {
            $lokasi_file = $_FILES['foto']['tmp_name'];
            $nama_file = $_FILES['foto']['name'];
            $direktori = 'cover_konten/'.$nama_file;
            if (move_uploaded_file($lokasi_file,$direktori)) {
                if (!empty($cover)) {
                    unlink("cover_konten/$cover"); 
                }
                $sql = "UPDATE `konten` SET `judul`='$judul', `isi`='$isi', `foto_konten`='$nama_file' WHERE `id_konten` = '$id_konten'";
                    mysqli_query($koneksi,$sql);
            }else {
                $sql = "UPDATE `konten` SET `judul`='$judul', `isi`='$isi' WHERE `id_konten` = '$id_konten'";
                    mysqli_query($koneksi,$sql);
            }
            header("Location:konten_notif-editberhasil");
        }
    }
?>