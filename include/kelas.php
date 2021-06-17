<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Layanan kelas <span>buildwithgandi</spa>
      </h1>
      <h2>Nikmati beberapa layanan kelas dari kami</h2>
    </div>
  </section><!-- End Hero -->

    <!-- ======= Team Section ======= -->
    <section id="product-item" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>Kelas</h2>
          <h3>Pilihan <span>Kelas</span></h3>
          <p>Pilihan kelas yang dapat anda pilih sesuai dengan keinginan kalian dan yang pastinya sangat bermanfaat.</p>
        </div>

        <div class="row">
            <?php
                    $sql_bl = "SELECT `b`.`id_kelas`, `b`.`nama_kelas`, `b`.`foto`, `k`.`kategori_kelas`, `p`.`nama`, `b`.`deskripsi` FROM `kelas` `b` INNER JOIN `kategori_kelas` `k` ON `b`.`id_kategori_kelas` = `k` . `id_kategori_kelas` INNER JOIN `mentor` `p` ON `b`.`id_mentor` = `p`.`id_mentor` ORDER BY `b`.`nama_kelas`";
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
    </section><!-- End Team Section -->