<?php
   if(isset($_SESSION['id_user'])){
    $id_mentor = $_SESSION['id_mentor'];
    $role_pekerjaan = $_POST['role_pekerjaan'];
    $deskripsi = $_POST['deskripsi'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'foto_mentor/'.$nama_file;


    if (empty($nama)) {
        header("Location:tambah-mentor_notif-namakosong");
    }elseif (empty($email)) {
        header("Location:tambah-mentor_notif-emailkosong");
    }elseif (empty($role_pekerjaan)) {
        header("Location:tambah-mentor_notif-rolekosong");
    }elseif (empty($deskripsi)) {
        header("Location:tambah-mentor_notif-deksripsikosong");
    }elseif (move_uploaded_file($lokasi_file,$direktori)) {
        
        $sql = "INSERT INTO `mentor` (`nama`, `email`, `role_pekerjaan`, `deskripsi`, `foto`) 
        VALUES ('$nama', '$email', '$role_pekerjaan', '$deskripsi', '$nama_file')";
           mysqli_query($koneksi,$sql);
           header("Location:mentor_notif-tambahberhasil");
           
   }else if(empty($foto)) {
       
       header("Location:tambah-mentor_notif-fotokosong");
   }     
   }
?>
        
    