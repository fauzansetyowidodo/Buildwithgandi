<?php
    if (isset($_SESSION['id_kategori_artikel'])) {
        $id_kategori_artikel = $_SESSION['id_kategori_artikel'];
        $kategori_artikel = $_POST['kategori_artikel'];

        if (empty($kategori_artikel)) {
            header("Location:edit-kategori-artikel-data-".$id_kategori_artikel."_notif-kategorikosong");
        }else {
            $sql = "UPDATE `kategori_artikel` SET `kategori_artikel` = '$kategori_artikel'
            WHERE `id_kategori_artikel` = '$id_kategori_artikel'";

            mysqli_query($koneksi,$sql);
            unset($_SESSION['id_kategori_artikel']);
            header("Location:kategori-artikel_notif-editberhasil");
        }
    }
?>