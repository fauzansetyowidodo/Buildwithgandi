<?php
    $id_user = $_SESSION['id_user']; 
    if ((isset ($_GET['aksi']))&&(isset($_GET['data']))) {
      if ($_GET['aksi']=='hapus') {
        $id_kelas = $_GET['data'];

      $sql_f = "SELECT `foto` FROM `kelas` WHERE `id_kelas` = '$id_kelas'";
      $query_f = mysqli_query($koneksi,$sql_f);
      $jumlah_f = mysqli_num_rows($query_f);
      if ($jumlah_f>0) {
        while ($data_f = mysqli_fetch_row($query_f)) {
          $foto = $data_f[0];
          unlink("foto_kelas/$foto");
        }
      }

        $sql_bg = "DELETE FROM `kelas` WHERE `id_kelas` = '$id_kelas'";
        mysqli_query($koneksi,$sql_bg);
      }
    }if(isset($_POST["katakunci"])){
      $katakunci_kelas = $_POST["katakunci"];
      $_SESSION['katakunci_kelas'] = $katakunci_kelas;
    }
    if(isset($_SESSION['katakunci_kelas'])){
      $katakunci_kelas = $_SESSION['katakunci_kelas'];
    }else{
      unset($_SESSION['katakunci_kelas']);
    }
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fab fa-blogger"></i> Kelas</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Kelas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Kelas</h3>
                <div class="card-tools">
                  <a href="tambah-kelas" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah Kelas</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="kelas">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
              <div class="col-sm-12">
                <?php if (!empty($_GET['notif'])) { ?>
                      <?php if ($_GET['notif']=="tambahberhasil") { ?>
                        <div class="alert alert-success" role="alert">
                        Data Berhasil Ditambahkan</div>
                    <?php } elseif ($_GET['notif']=="editberhasil") { ?>
                      <div class="alert alert-success" role="alert">
                        Data Berhasil Ditambahkan</div>
                    <?php } elseif ($_GET['notif']=="hapusberhasil") { ?>
                      <div class="alert alert-success" role="alert">
                        Data Berhasil Dihapus</div
                   <?php } ?>
                  <?php }?>
                 </div>
                 
              <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Kategori Kelas</th>
                        <th width="20%">Nama Kelas</th>
                        <th width="30%">Mentor</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                       $batas = 4;
                       if (!isset($_GET['halaman'])) {
                         $posisi = 0;
                         $halaman =1;
                       }else {
                         $halaman = $_GET['halaman'];
                         $posisi = ($halaman-1)*$batas;
                       }
                        $sql_b = "SELECT `b`.`id_kelas`, `b`.`nama_kelas`,  
                        `k`.`kategori_kelas`, `p`.`nama` FROM  `kelas` `b`
                         INNER JOIN `kategori_kelas` `k` ON `b`.`id_kategori_kelas` =
                         `k` . `id_kategori_kelas` INNER JOIN `mentor` `p` ON 
                         `b`.`id_mentor` = `p`.`id_mentor`";

                        if (!empty($katakunci_kelas)) {
                          $sql_b .="WHERE `nama_kelas` LIKE '%$katakunci_kelas%'";
                        }
                        $sql_b .= "ORDER BY `k`.`kategori_kelas`, `b`.`nama_kelas` LIMIT $posisi, $batas";
                                 
                        $query_b = mysqli_query($koneksi,$sql_b);
                        $no = $posisi+1;

                        while ($data_b = mysqli_fetch_row($query_b)) {
                          $id_kelas = $data_b[0];
                          $nama_kelas = $data_b[1];
                          $kategori_kelas = $data_b[2];
                          $mentor = $data_b[3];
                      ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $kategori_kelas; ?></td>
                        <td><?php echo $nama_kelas; ?></td>
                        <td><?php echo $mentor; ?></td>
                        <td align="center">
                          <a href="edit-kelas-data-<?php echo $id_kelas; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                          <a href="detail-kelas-data-<?php echo $id_kelas; ?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i> Detail</a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $nama_kelas; ?>?'))window.location.href=
                                  'kelas-data-<?php echo $id_kelas; ?>-mode-hapus_notif-hapusberhasil'"
                                  class="btn btn-xs btn-warning"><i class="fas fa-trash"></i>
                          Hapus</a>                         
                        </td>
                      </tr>
                      <?php $no++; } ?>       
                      
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <?php
                $sql_jum = "SELECT `b`.`id_kelas`, `b`.`nama_kelas`,  
                `k`.`kategori_kelas`, `p`.`nama` FROM  `kelas` `b`
                 INNER JOIN `kategori_kelas` `k` ON `b`.`id_kategori_kelas` =
                 `k` . `id_kategori_kelas` INNER JOIN `mentor` `p` ON 
                 `b`.`id_mentor` = `p`.`id_mentor`";
                if (!empty($katakunci_kelas)){
                  $sql_jum .= " where `nama_kelas` LIKE '%$katakunci_kelas%'";       
                }        
                $sql_jum .= "ORDER BY `nama_kelas`";
                
                $query_jum = mysqli_query($koneksi,$sql_jum);
                $jum_data = mysqli_num_rows($query_jum);
                $jum_halaman = ceil($jum_data/$batas);
              ?>
              <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                  <?php
                  if($jum_halaman==0){
                  //tidak ada halaman
                  }else if($jum_halaman==1){
                  echo "<li class='page-item'><a class='page-link'>1</a></li>";
                  }else{
                  $sebelum = $halaman-1;
                  $setelah = $halaman+1;
                  if($halaman!=1){
                  echo "<li class='page-item'><a class='page-link' href='kelas-halaman-1'>First</a></li>";
                  echo "<li class='page-item'><a class='page-link' href='kelas-halaman-$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                  if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                  if($i!=$halaman){
                  echo "<li class='page-item'><a class='page-link' href='kelas-halaman-$i'>$i</a></li>";
                  }else{
                  echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                  }
                  }
                  }
                  if($halaman!=$jum_halaman){
                  echo "<li class='page-item'><a class='page-link' href='kelas-halaman-$setelah'>»</a></li>";
                  echo "<li class='page-item'><a class='page-link' href='kelas-halaman-$jum_halaman'>Last</a></li>";
                  }
                  }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->
    </section>