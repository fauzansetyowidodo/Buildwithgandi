  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Artikel <span>Terbaru</span>
      </h1>
      <h2>Kumpulan artikel untuk mencapai masa depan.</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <section id="blog-item">
      <main role="main" class="container">
        <div class="row">
          <div class="col-md-9 blog-main">
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
            <div class="col-md-11">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static bg-light">
                  <strong class="d-inline-block mb-2 text-success"><?php echo $kategori_artikel; ?></strong>
                  <h3 class="mb-0"><a href="detail-artikel-data-<?php echo $id_artikel; ?>"><?php echo $judul_artikel; ?></a></h3>
                  <div class="mb-1 text-muted"><?php echo TanggalIndo($tanggal); ?></div>
                  <!--<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>-->
                  <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                  </div>
                  <div class="col-auto d-none d-lg-block">
                      <img src="admin/cover/<?php echo $foto; ?>" class="img-card" title="book title here">
                  </div>
              </div>
          </div>  
            <?php } ?>
          </div><!-- /.blog-main -->
      
          <aside class="col-md-3 blog-sidebar">
      
            <div class="p-4">
              <h4 class="font-italic">Categories</h4>
              <ol class="list-unstyled mb-0">
              <?php 
                $sql_k = "SELECT `id_kategori_artikel`,`kategori_artikel` FROM `kategori_artikel` ORDER BY `kategori_artikel`";
                $query_k = mysqli_query($koneksi, $sql_k);
                while($data_k = mysqli_fetch_row($query_k)){
                  $id_kat = $data_k[0];
                  $nama_kat = $data_k[1];
                  ?>
                  <li><a href="daftar-artikel-kategori-data-<?php echo $id_kat; ?>"><?php echo $nama_kat; ?></a>
                  </li>
                  <?php } ?>
            </div>
      
            <div class="p-4">
              <h4 class="font-italic">Archives</h4>
              <ol class="list-unstyled mb-0">
              <?php
                $date= "SELECT `id_artikel`, DATE_FORMAT(`tanggal`, '%m-%Y') AS `tgl` FROM `artikel` GROUP BY `tgl`";
                $query_a = mysqli_query($koneksi,$date);
                while($data_a = mysqli_fetch_row($query_a)){
                $id_b = $data_a[0];
                $tanggal = $data_a[1];
                ?>

                <li><a href="index.php?include=daftar-artikel-arsip&data=<?php echo $tanggal; ?>">
                <?php echo BulanIndo($tanggal);?></a></li>
                <?php }?>
              </ol>
            </div>
      
            
          </aside><!-- /.blog-sidebar -->
      
        </div><!-- /.row -->
      
      </main><!-- /.container -->
    </section><br><br>
     </main><!-- End #main -->