<?php
                if (isset($_GET['include'])) {
                    $include = $_GET['include'];
                    if (isset($_GET['data'])) {
                        $data = $_GET['data'];
                        if ($include=='daftar-artikel-kategori') {
                            $sql = "SELECT kategori_artikel FROM kategori_artikel WHERE id_kategori_artikel = $data";
                            
                        }else {
                          $ex = explode("-",$data);
                          $bulan = $ex[0];
                          $tahun = $ex[1];
                          $sql = "SELECT DATE_FORMAT(`tanggal`,'%c-%Y') as `tgl` FROM `artikel` WHERE MONTH(`tanggal`) = $bulan AND YEAR(`tanggal`) = $tahun";
                        }
                        $query = mysqli_query($koneksi,$sql);
                        while ($data_c = mysqli_fetch_row($query)) {
                            $nama = $data_c[0];
                        }
                    } 
                }
            ?>
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
        <?php 
            $include = $_GET['include'];
            $data = $_GET['data'];
            if($include=='daftar-artikel-kategori'){
                include('kategori_artikel.php');
            }else{
                include('arsip.php');
            }
            ?>
          </div>  
          <div class="col-md-9 blog-main">
          
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