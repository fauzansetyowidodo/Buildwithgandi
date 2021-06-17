<section id="blog-header">
      <div class="container">
        <h1 class="text-white">DETAIL PENULIS</h1>
      </div>
    </section><br><br>
    <section id="katalog-wrapper">
      <main role="main" class="container">
        <div class="row">
          <div class="col-md-9 katalog-detail">
            <div class="table-responsive">
              <table class="table table-bordered">
                <?php
                if (isset($_GET["penulis"])) {
                  $id_user = $_GET['penulis'];
                }
                  $sql_d = "SELECT `foto`, `nama`, `email` FROM user WHERE `id_user` = $id_user";
                  $query_d = mysqli_query($koneksi,$sql_d);
                  while ($data_d = mysqli_fetch_row($query_d)) {
                    $foto = $data_d[0];
                    $nama = $data_d[1];
                    $email = $data_d[2];
                  
                ?>
              <tr>
                <td width="40%" rowspan="6">
                <img src="admin/foto/<?php echo $foto;?>" class="img-fluid"

                alt="<?php echo $nama;?>"
                title="<?php echo $nama;?>"></td>
                <td colspan="2"><h4><?php echo $nama;?></h4></td>
                </tr>
                <tr>
                  <td width="17%"><strong>email</strong></td>
                  <td width="43%"><?php echo $email;?></td>
                </tr>
                <?php }?>
              </table>
            </div><!-- .table-responsive -->

          </div><!-- /.blog-main -->  
      
        </div><!-- /.row -->
      
      </main><!-- /.container -->
    </section><br><br>