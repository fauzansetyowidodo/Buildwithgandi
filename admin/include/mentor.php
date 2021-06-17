<?php
    $id_user = $_SESSION['id_user']; 
    if ((isset ($_GET['aksi']))&&(isset($_GET['data']))) {
      if ($_GET['aksi']=='hapus') {
        $id_mentor = $_GET['data'];

      $sql_f = "SELECT `foto` FROM `mentor` WHERE `id_mentor` = '$id_mentor'";
      $query_f = mysqli_query($koneksi,$sql_f);
      $jumlah_f = mysqli_num_rows($query_f);
      if ($jumlah_f>0) {
        while ($data_f = mysqli_fetch_row($query_f)) {
          $foto = $data_f[0];
          unlink("foto_mentor/$foto");
        }
      }

        $sql_bg = "DELETE FROM `mentor` WHERE `id_mentor` = '$id_mentor'";
        mysqli_query($koneksi,$sql_bg);
      }
    }if(isset($_POST["katakunci"])){
      $katakunci_mentor = $_POST["katakunci"];
      $_SESSION['katakunci_mentor'] = $katakunci_mentor;
    }
    if(isset($_SESSION['katakunci_mentor'])){
      $katakunci_mentor = $_SESSION['katakunci_mentor'];
    }else{
      unset($_SESSION['katakunci_mentor']);
    }
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fab fa-blogger"></i> Mentor</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Mentor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Mentor</h3>
                <div class="card-tools">
                  <a href="tambah-mentor" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah Mentor</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="mentor">
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
                        <th width="30%">Nama Mentor</th>
                        <th width="20%">Email</th>
                        <th width="30%">Role Pekerjaan</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $batas = 2;
                        if (!isset($_GET['halaman'])) {
                          $posisi = 0;
                          $halaman = 1;
                        }else {
                          $halaman = $_GET['halaman'];
                          $posisi = ($halaman-1)*$batas;
                        }
                        $sql_k = "SELECT `b`.`id_mentor`, `b`.`nama`, `b`.`email`, `b`.`role_pekerjaan` FROM `mentor` `b`";
                        if (!empty($katakunci_mentor)) {
                         
                          $sql_k .= "WHERE `nama` LIKE '%$katakunci_mentor%'";
                        }
                        $sql_k .= "ORDER BY `nama` LIMIT $posisi, $batas";
                        $query_k = mysqli_query($koneksi,$sql_k);
                        $no = $posisi+1;
                        while ($data_k = mysqli_fetch_row($query_k)) {
                          $id_mentor = $data_k[0];
                          $nama = $data_k[1];
                          $email = $data_k[2];
                          $role_pekerjaan = $data_k[3];

                        
                      ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $role_pekerjaan; ?></td>
                        <td align="center">
                          <a href="edit-mentor-data-<?php echo $id_mentor; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i> Edit</a>
                          <a href="detail-mentor-data-<?php echo $id_mentor; ?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i> Detail</a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data<?php echo $nama; ?>?'))window.location.href=
                                  'mentor-data-<?php echo $id_mentor; ?>-mode-hapus_notif-hapusberhasil'"
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
                $sql_jum = "SELECT `b`.`id_mentor`, `b`.`nama`, `b`.`email`, `b`.`role_pekerjaan` FROM `mentor` `b`";
                if (!empty($katakunci_mentor)){
                  $sql_jum .= " where `nama` LIKE '%$katakunci_mentor%'";       
                }        
                $sql_jum .= "ORDER BY `nama`";
                
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
                  echo "<li class='page-item'><a class='page-link' href='mentor-halaman-1'>First</a></li>";
                  echo "<li class='page-item'><a class='page-link' href='mentor-halaman-$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                  if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                  if($i!=$halaman){
                  echo "<li class='page-item'><a class='page-link' href='mentor-halaman-$i'>$i</a></li>";
                  }else{
                  echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                  }
                  }
                  }
                  if($halaman!=$jum_halaman){
                  echo "<li class='page-item'><a class='page-link' href='mentor-halaman-$setelah'>»</a></li>";
                  echo "<li class='page-item'><a class='page-link' href='mentor-halaman-$jum_halaman'>Last</a></li>";
                  }
                  }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->
    </section>