<?php
    if (isset($_SESSION['id_kategori_kelas'])) {
        $id_kategori_kelas = $_SESSION['id_kategori_kelas'];
        $kategori_kelas = $_POST['kategori_kelas'];
        $deskripsi = $_POST['deskripsi'];
        if (empty($kategori_kelas)) {
            header("Location:edit-kategori-kelas-data-".$id_kategori_kelas."_notif-kategorikosong");
        }elseif (empty($deskripsi)) {
            header("Location:edit-kategori-kelas-data-".$id_kategori_kelas."_notif-deskripsikosong");
        }else {
            $sql = "UPDATE `kategori_kelas` SET `kategori_kelas`='$kategori_kelas', `deskripsi`='$deskripsi'
            WHERE `id_kategori_kelas` = '$id_kategori_kelas'";
            mysqli_query($koneksi,$sql);
            unset($_SESSION['id_kategori_kelas']);
            header("Location:kategori-kelas_notif-editberhasil");
        }
    }
?>