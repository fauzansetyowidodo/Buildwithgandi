<?php
    if (isset($_SESSION['id_mentor'])) {
        $id_mentor =  $_SESSION['id_mentor'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $role_pekerjaan = $_POST['role_pekerjaan'];
        $deskripsi = $_POST['deskripsi'];
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $nama_file = $_FILES['foto']['name'];
        $direktori = 'foto_mentor/'.$nama_file;

        $sql_f = "SELECT `foto` FROM `mentor` WHERE `id_mentor`='$id_mentor'";
        $query_f=mysqli_query($koneksi,$sql_f);
        while ($data_f = mysqli_fetch_row($query_f)) {
            $foto = $data_f[0];
        }
        
    
    if (empty($nama)) {
        header("Location:edit-mentor-data-".$id_mentor."_notif-namakosong");
    }elseif (empty($email)) {
        header("Location:edit-mentor-data-".$id_mentor."_notif-emailkosong");
    }elseif (empty($role_pekerjaan)) {
        header("Location:edit-mentor-data-".$id_mentor."_notif-rolekosong");
    }elseif (empty($deskripsi)) {
        header("Location:edit-mentor-data-".$id_mentor."_notif-deskripsikosong");
    }else {
        $lokasi_file = $_FILES['foto']['tmp_name'];
        $nama_file = $_FILES['foto']['name'];
        $direktori = 'foto_mentor/'.$nama_file;
        if (move_uploaded_file($lokasi_file,$direktori)) {
            if (!empty($foto)) {
                unlink("foto_mentor/$foto"); 
            }
            $sql = "UPDATE `mentor` set `nama`='$nama', `email`='$email', `role_pekerjaan`='$role_pekerjaan', `deskripsi`='$deskripsi', `foto`='$nama_file' WHERE `id_mentor` = '$id_mentor'";
            mysqli_query($koneksi,$sql);
        }else{
            $sql = "UPDATE `mentor` set `nama`='$nama', `email`='$email', `role_pekerjaan`='$role_pekerjaan', `deskripsi`='$deskripsi' WHERE `id_mentor` = '$id_mentor'";
            mysqli_query($koneksi,$sql);
        }
        header("Location:mentor_notif-editberhasil");
     }
    }
?>
        
    
