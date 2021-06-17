<?php 
     include('includes/fungsi.php');
  ?>
  <main id="main" data-aos="fade-up">
    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">
      <?php
      if (isset($_GET["data"])) {
        $id_kelas = $_GET['data'];
      }
        $sql_bl = "SELECT `b`.`id_kelas`, `b`.`nama_kelas`, `b`.`foto`, `k`.`kategori_kelas`, `p`.`nama`, `b`.`deskripsi`, `p`.`id_mentor` FROM `kelas` `b` INNER JOIN `kategori_kelas` `k` ON `b`.`id_kategori_kelas` = `k` . `id_kategori_kelas` INNER JOIN `mentor` `p` ON `b`.`id_mentor` = `p`.`id_mentor` WHERE `b`.`id_kelas` = '$id_kelas'";
                    $query_bl = mysqli_query($koneksi,$sql_bl);
            while ($data_bl = mysqli_fetch_row($query_bl)) {
            $id_kelas = $data_bl[0];
            $nama_kelas = $data_bl[1];
            $foto = $data_bl[2];
            $kategori_kelas= $data_bl[3];
            $nama_mentor = $data_bl[4];
            $deskripsi =$data_bl[5];
            $id_mentor = $data_bl[6];
      }
      ?>
        <div class="portfolio-details-container">
          <div >
            <img src="admin/foto_kelas/<?php echo $foto; ?>" class="img-fluid" alt="">
          </div>
        </div>
        <div class="portfolio-description">
          <h1><?php echo $nama_kelas; ?></h1>
          <br>
          <h4> Kategori Kelas <?php echo $kategori_kelas; ?></h4>
          <h4>Mentor : <a href="detail-mentor-data-<?php echo $id_mentor; ?>"><?php echo $nama_mentor; ?></a></h4>
          <br>
          <p>
         <?php echo $deskripsi; ?>
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->