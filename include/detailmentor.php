<?php 
     include('includes/fungsi.php');
  ?>
    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">
      <?php
      if (isset($_GET["data"])) {
          $id_mentor = $_GET['data'];
      }
      $sql_a = "SELECT `foto`, `nama`, `role_pekerjaan`, `email`, `deskripsi` FROM `mentor` WHERE `id_mentor` = $id_mentor";
      $query_a = mysqli_query($koneksi,$sql_a);
      while ($data_a = mysqli_fetch_row($query_a)) {
              $foto = $data_a[0];
              $nama = $data_a[1];
              $role = $data_a[2];
              $email = $data_a[3];
              $deskripsi = $data_a[4];
       } ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="detailmentor">
              <div class="member-img">
                <img src="admin/foto_mentor/<?php echo $foto; ?>" class="img-fluid" alt="">
              </div>
              <div class="portfolio-description">
                <h2><?php echo $nama; ?></h2>
                <p class="blog-post-meta"><?php echo $role; ?> <a href="#"><?php echo $email; ?></a></p>
                <p>
              <?php echo $deskripsi; ?>
                </p>
              </div>
          </div>
          
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
