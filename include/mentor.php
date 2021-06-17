  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Yuk Kenalan dengan <span>Mentor Kami</spa>
      </h1>
      <h2>Mentor diambil dari perusahaan langsung sesuai jobdesnya</h2>
    </div>
  </section><!-- End Hero -->

    <!-- ======= Team Section ======= -->
    <section id="product-item" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mentor</h2>
          <h3>Jajaran mentor <span>Terbaik</span></h3>
          <p>Mentor diambil dari perusahaan langsung sesuai jobdescnya</p>
        </div>
        
        <div class="row">
        <?php
            $sql_a = "SELECT `id_mentor`, `foto`, `nama`, `role_pekerjaan` FROM `mentor` ORDER BY `nama`";
            $query_a = mysqli_query($koneksi,$sql_a);
            while ($data_a = mysqli_fetch_row($query_a)) {
              $id_mentor = $data_a[0];
              $foto = $data_a[1];
              $nama = $data_a[2];
              $role = $data_a[3];
            
          ?> 
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
              <div class="member-img">
                <img src="admin/foto_mentor/<?php echo $foto; ?>" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?php echo $nama; ?></h4>
                <span><?php echo $role; ?></span>
                <br>
                <div class="btn-wrapper">
                  <a href="detail-mentor-data-<?php echo $id_mentor; ?>" class="btn-detail ">Detail</a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Team Section -->