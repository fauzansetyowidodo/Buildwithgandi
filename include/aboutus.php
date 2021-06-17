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
      $sql_bl = "SELECT `judul`, `foto_konten`, `isi` FROM `konten` where `id_konten` = '10' ";
      $query_bl = mysqli_query($koneksi,$sql_bl);
      while ($data_bl = mysqli_fetch_row($query_bl)) {
        $judul = $data_bl[0];
        $foto = $data_bl[1];
        $isi = $data_bl[2];
       
      }
      ?>
        <div class="portfolio-details-container">
          <div >
            <img src="admin/cover_konten/<?php echo $foto; ?>" class="img-fluid" alt="">
          </div>
        </div>
        <div class="portfolio-description">
          <h2><?php echo $judul; ?></h2>
          <p class="blog-post-meta"> <a href="#"></a></p>
          <p>
         <?php echo $isi; ?>
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main --> 