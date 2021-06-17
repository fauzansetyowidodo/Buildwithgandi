<?php
     $id_user = $_SESSION['id_user']; 
    if ((isset ($_GET['aksi']))&&(isset($_GET['data']))) {
      if ($_GET['aksi']=='hapus') {
        $id_artikel= $_GET['data'];
        $sql_bg = "DELETE FROM `artikel` WHERE `id_artikel` = '$id_artikel'";
        mysqli_query($koneksi,$sql_bg);
      }
    }if(isset($_POST["katakunci"])){
      $katakunci_artikel = $_POST["katakunci"];
      $_SESSION['katakunci_artikel'] = $katakunci_artikel;
    }
    if(isset($_SESSION['katakunci_artikel'])){
      $katakunci_artikel = $_SESSION['katakunci_artikel'];
    }else{
      unset($_SESSION['katakunci_artikel']);
    }
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fab fa-artikelger"></i> Artikel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Artikel</h3>
                <div class="card-tools">
                  <a href="tambah-artikel" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah Artikel</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="artikel">
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
                        <th width="30%">Kategori Artikel</th>
                        <th width="30%">Judul artikel</th>
                        <th width="20%">Tanggal</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $batas = 4;
                        if (!isset($_GET['halaman'])) {
                          $posisi = 0;
                          $halaman = 1;
                        }else {
                          $halaman = $_GET['halaman'];
                          $posisi = ($halaman-1)*$batas;
                        }
                        $sql_k = "SELECT `b`.`id_artikel`, `b`.`judul_artikel`, `b`.`tanggal`, 
                        `k`.`kategori_artikel` FROM `artikel` `b` 
                        INNER JOIN `kategori_artikel` `k` ON `b`.`id_kategori_artikel` = `k`.`id_kategori_artikel`";
                        if (!empty($katakunci_artikel)) {
                          $sql_k .= "WHERE `judul_artikel` LIKE '%$katakunci_artikel%'";
                        }
                        $sql_k .= "ORDER BY `judul_artikel` LIMIT $posisi, $batas";
                        $query_k = mysqli_query($koneksi,$sql_k);
                        $no = $posisi+1;
                        while ($data_k = mysqli_fetch_row($query_k)) {
                          $id_artikel = $data_k[0];
                          $judul_artikel = $data_k[1];
                          $tanggal = $data_k[2];
                          $kategori_artikel = $data_k[3];

                        
                      ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $kategori_artikel; ?></td>
                        <td><?php echo $judul_artikel; ?></td>
                        <td><?php echo $tanggal; ?></td>
                        <td align="center">
                          <a href="edit-artikel-data-<?php echo $id_artikel; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="detail-artikel-data-<?php echo $id_artikel; ?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $judul_artikel; ?>'))window.location.href=
                                  'artikel-data-<?php echo $id_artikel; ?>-mode-hapus_notif-hapusberhasil'"
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
                $sql_jum = "SELECT `b`.`id_artikel`, `b`.`judul_artikel`, `b`.`tanggal`, 
                `k`.`kategori_artikel` FROM `artikel` `b` 
                INNER JOIN `kategori_artikel` `k` ON `b`.`id_kategori_artikel` = `k`.`id_kategori_artikel`";
                if (!empty($katakunci_artikel)){
                  $sql_jum .= " where `judul_artikel` LIKE '%$katakunci_artikel%'";       
                }        
                $sql_jum .= "ORDER BY `judul_artikel`";
                
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
                  echo "<li class='page-item'><a class='page-link' href='artikel-halaman-1'>First</a></li>";
                  echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                  if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                  if($i!=$halaman){
                  echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$i'>$i</a></li>";
                  }else{
                  echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                  }
                  }
                  }
                  if($halaman!=$jum_halaman){
                  echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$setelah'>»</a></li>";
                  echo "<li class='page-item'><a class='page-link' href='artikel-halaman-$jum_halaman'>Last</a></li>";
                  }
                  }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->
    </section>