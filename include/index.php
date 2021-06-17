  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>BUILDWITHGANDI</spa>
      </h1>
      <h2>Belajar terus sampai keren</h2>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <?php
           $sql_k ="SELECT `judul`, `isi` FROM `konten` WHERE `id_konten` = '5'";
           $query_k = mysqli_query($koneksi,$sql_k);
           while ($data_k = mysqli_fetch_row($query_k)) {
             $judul_konten = $data_k[0];
             $isi_konten = $data_k[1];
           }
        ?>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?php echo $judul_konten; ?></a></h4>
              <p class="description"><?php echo $isi_konten; ?></p>
            </div>
          </div>
          <?php
            $sql_co ="SELECT `judul`, `isi` FROM `konten` WHERE `id_konten` = '6'";
            $query_co = mysqli_query($koneksi,$sql_co);
            while ($data_co = mysqli_fetch_row($query_co)) {
              $judul_konten_coding = $data_co[0];
              $isi_konten_coding = $data_co[1];
            }
           ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href=""><?php echo $judul_konten_coding; ?></a></h4>
              <p class="description"><?php echo $isi_konten_coding; ?></p>
            </div>
          </div>
          <?php
            $sql_nt ="SELECT `judul`, `isi` FROM `konten` WHERE `id_konten` = '7'";
            $query_nt = mysqli_query($koneksi,$sql_nt);
            while ($data_nt = mysqli_fetch_row($query_nt)) {
              $judul_konten_nt = $data_nt[0];
              $isi_konten_nt = $data_nt[1];
            }
           ?>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href=""><?php echo $judul_konten_nt; ?></a></h4>
              <p class="description"><?php echo $isi_konten_nt; ?></p>
            </div>
          </div>
          <?php
            $sql_dm ="SELECT `judul`, `isi` FROM `konten` WHERE `id_konten` = '8'";
            $query_dm = mysqli_query($koneksi,$sql_dm);
            while ($data_dm = mysqli_fetch_row($query_dm)) {
              $judul_konten_dm = $data_dm[0];
              $isi_konten_dm = $data_dm[1];
            }
           ?>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href=""><?php echo $judul_konten_dm; ?></a></h4>
              <p class="description"><?php echo $isi_konten_dm; ?></p>
            </div>
          </div>
         

        </div>

      </div>
    </section><!-- End Featured Services Section -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Kenali lebih jauh <span>Tentang kami</span></h3>
          <p>Kami adalah perusahaan startup yang bergerak dibidang layanan mentoring</p>
        </div>
            <?php
              $sql_bnk = "SELECT `foto_konten`, `judul`, `isi` FROM `konten` WHERE `id_konten` = '9'";
              $query_bnk =mysqli_query($koneksi,$sql_bnk);
              while ($data_bnk = mysqli_fetch_row($query_bnk)) {
                $foto_konten_bnk = $data_bnk[0];
                $judul_konten_bnk = $data_bnk[1];
                $isi_konten_bnk = $data_bnk[2];
              }
            ?>
        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="admin/cover_konten/<?php echo $foto_konten_bnk; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3><?php echo $judul_konten_bnk; ?></h3>
            <p class="font-italic">
              <?php echo $isi_konten_bnk; ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  
    <section id="product-item" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kelas</h2>
          <h3>Pilihan <span>Kelas</span></h3>
          <p>Pilihan kelas yang dapat anda pilih sesuai dengan keinginan kalian dan yang pastinya sangat bermanfaat.</p>
        </div>

        <div class="row">
            <?php
                    $sql_bl = "SELECT `b`.`id_kelas`, `b`.`nama_kelas`, `b`.`foto`, `k`.`kategori_kelas`, `p`.`nama`, `b`.`deskripsi` FROM `kelas` `b` INNER JOIN `kategori_kelas` `k` ON `b`.`id_kategori_kelas` = `k` . `id_kategori_kelas` INNER JOIN `mentor` `p` ON `b`.`id_mentor` = `p`.`id_mentor` ORDER BY `b`.`nama_kelas` DESC LIMIT 3";
                    $query_bl = mysqli_query($koneksi,$sql_bl);
                    while ($data_bl = mysqli_fetch_row($query_bl)) {
                        $id_kelas = $data_bl[0];
                        $nama_kelas = $data_bl[1];
                        $foto = $data_bl[2];
                        $kategori_kelas= $data_bl[3];
                        $nama_mentor = $data_bl[4];
                        $deskripsi =$data_bl[5];               
                ?>
              <div class="member" style="width: 20rem;">
                <img class="card-img-top" src="admin/foto_kelas/<?php echo $foto; ?>" alt="Card image cap">
                <div class="member-info">
                    <h4><?php echo $nama_kelas; ?></h4>
                    <p class="card-text"><?php echo $deskripsi; ?></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bx bxs-user-account"></i>
                        <?php echo $nama_mentor; ?></li></li>
                        <li class="list-group-item"><i class=" bx bx-book">
                            <?php echo $kategori_kelas; ?>
                        </i></li>
                      </ul>
                      <div class="btn-wrapper">
                        <a href="detail-kelas-data-<?php echo $id_kelas; ?>" class="btn-detail">View Details</a>
                      </div>
                </div>
              </div>
           <?php } ?>
        </div>

      </div>
    </section><!-- End Services Section -->

   
    <!-- ======= Team Section ======= -->
    <section id="product-item" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mentor</h2>
          <h3>Jajaran Mentor <span>Terbaik</span></h3>
          <p>Mentor diambil dari perusahaan langsung sesuai jobdesnya</p>
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
    <section id="blog-item" class="mb-4">
        <div class="container">
            <h2>Artikel Terbaru</h2><br>
            <div class="row mb-2 member-info">
            <?php
                       include('includes/fungsi.php');
                       $sql_l = "SELECT `b`.`id_artikel`, `b`.`judul_artikel`, `b`.`tanggal`, `b`.`foto`,  
                       `k`.`kategori_artikel` FROM `artikel` `b` INNER JOIN
                       `kategori_artikel` `k`
                       ON `b`.`id_kategori_artikel` = `k`.`id_kategori_artikel`
                       ORDER BY `b`.`id_artikel` DESC";
                       $query_l = mysqli_query($koneksi,$sql_l);
                       while ($data_l = mysqli_fetch_row($query_l)) {
                         $id_artikel = $data_l[0];
                         $judul_artikel = $data_l[1];
                         $tanggal = $data_l[2];
                         $foto = $data_l[3];
                         $kategori_artikel = $data_l[4];
                    ?>
                <div class="col-md-6 member">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative member">
                        <div class="col p-4 d-flex flex-column position-static bg-light">
                        <strong class="d-inline-block mb-2 text-success">World</strong>
                        <h3 class="mb-0"><a href="index.php?include=detail-artikel&data=<?php echo $id_artikel; ?>"><?php echo $judul_artikel; ?></a></h3>
                        <div class="mb-1 text-muted"><?php echo TanggalIndo($tanggal); ?></div>
                        <!--<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>-->
                        <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="admin/cover/<?php echo $foto; ?>" class="img-fluid" title="book title here">
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

  </main><!-- End #main -->
