  <?php 
     include('includes/fungsi.php');
  ?>
  <main id="main" data-aos="fade-up">
    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">
      <?php
      if (isset($_GET["data"])) {
        $id_artikel = $_GET['data'];
      }
      $sql_bl = "SELECT `b`.`judul_artikel`,DATE_FORMAT(`b`.`tanggal`, '%M %d, %Y'),`b`.`foto`, `b`.`isi`, `u`.`nama` FROM `artikel` `b` INNER JOIN `user` `u` ON `b`.`id_user`=`u`.`id_user` WHERE `b`.`id_artikel` = '$id_artikel'";
      $query_bl = mysqli_query($koneksi,$sql_bl);
      while ($data_bl = mysqli_fetch_row($query_bl)) {
        $judul_artikel = $data_bl[0];
        $tanggal= $data_bl[1];
        $foto = $data_bl[2];
        $isi = $data_bl[3];
        $id_user = $data_bl[4];
      }
      ?>
        <div class="portfolio-details-container">
          <div >
            <img src="admin/cover/<?php echo $foto; ?>" class="img-fluid" alt="">
          </div>
        </div>
        <div class="portfolio-description">
          <h2><?php echo $judul_artikel; ?></h2>
          <p class="blog-post-meta"><?php echo $tanggal; ?> <a href="#"><?php echo $id_user; ?></a></p>
          <p>
         <?php echo $isi; ?>
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->