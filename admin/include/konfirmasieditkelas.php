<?php
    if(isset($_SESSION['id_kelas'])){
        $id_kelas = $_SESSION['id_kelas'];
        $id_kategori_kelas = $_POST['id_kategori_kelas'];
        $nama_kelas = $_POST['nama_kelas'];
        $deskripsi = $_POST['deskripsi'];
        $id_mentor = $_POST['id_mentor'];
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $nama_file = $_FILES['foto']['name'];
        $direktori = 'foto_kelas/'.$nama_file;
        //get cover
        $sql_f = "SELECT `foto` FROM `kelas` WHERE `id_kelas`='$id_kelas'";
        $query_f = mysqli_query($koneksi,$sql_f);
        while($data_f = mysqli_fetch_row($query_f)){
        $foto = $data_f[0];
    //echo $foto;
    }
         if(empty($id_kategori_kelas)){
            header("Location:edit-kelas-data-".$id_kelas."_notif-kategorikosong");
        }else if(empty($nama_kelas)){
            header("Location:edit-kelas-data-".$id_kelas."_notif-namakosong");
        }else if(empty($deskripsi)){
            header("Location:edit-kelas-data-".$id_kelas."_notif-deskripsikosong");
        }else if(empty($id_mentor)){
            header("Location:edit-kelas-data-".$id_kelas."_notif-mentorkosong");
        }else{
            $lokasi_file = $_FILES['foto']['tmp_name'];
            $nama_file = $_FILES['foto']['name'];
            $direktori = 'foto_kelas/'.$nama_file;
            if(move_uploaded_file($lokasi_file,$direktori)){
                if(!empty($foto)){

                    unlink("foto_kelas/$foto");
                    }
                $sql = "UPDATE `kelas` set
                `nama_kelas`='$nama_kelas',`deskripsi`='$deskripsi',
                `id_mentor`='$id_mentor',`id_kategori_kelas`='$id_kategori_kelas',
                `foto`='$nama_file' WHERE `id_kelas`='$id_kelas'";
                mysqli_query($koneksi,$sql);
            }else{
                $sql = "UPDATE `kelas` set
                `nama_kelas`='$nama_kelas',`deskripsi`='$deskripsi',
                `id_mentor`='$id_mentor',`id_kategori_kelas`='$id_kategori_kelas' WHERE `id_kelas`='$id_kelas'";
                mysqli_query($koneksi,$sql);
            }
            header("Location:kelas_notif-editberhasil");
            }
    }
?>

