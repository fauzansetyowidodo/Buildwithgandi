<?php
  $id_user = $_SESSION['id_user'];
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
    $id_kategori_kelas = $_GET['data'];
    //hapus kategori buku
    $sql_dh = "delete from kategori_kelas where id_kategori_kelas = '$id_kategori_kelas'";
    mysqli_query($koneksi,$sql_dh);
    }
  }
  if(isset($_POST["katakunci"])){
    $katakunci_kategori = $_POST["katakunci"];
    $_SESSION['katakunci_kategori'] = $katakunci_kategori;
  }
  if(isset($_SESSION['katakunci_kategori'])){
    $katakunci_kategori = $_SESSION['katakunci_kategori'];
  }else{
    unset($_SESSION['katakunci_kategori']);
  }
?>
    <!-- Main content -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-address-book"></i> Kategori Kelas</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Kategori Kelas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Kategori Kelas</h3>
                <div class="card-tools">
                  <a href="tambah-kategori-kelas" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Kategori Kelas</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="kategori-kelas">
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
              <div class="col-sm-12">
                <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="tambahberhasil"){ ?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Ditambahkan</div>
                  <?php } else if($_GET['notif']=="editberhasil"){ ?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Diubah</div>
                  <?php } elseif ($_GET['notif']=="hapusberhasil"){ ?>
                    <div class="alert alert-success" role="alert">
                  Data Berhasil Dihapus</div>
                <?php } ?>
                <?php } ?>
                </div>
              </div>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th width="5%">No</th>
                      <th width="10%">Kategori Kelas</th>
                      <th width="70%">Deskripsi</th>
                      <th width="20%"><center>Aksi</center></th>
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

                        $sql_k = "SELECT `id_kategori_kelas`, `kategori_kelas`, `deskripsi` FROM `kategori_kelas` ";
                        if (!empty($katakunci_kategori)) {
                          $sql_k .= "WHERE `kategori_kelas` LIKE '%$katakunci_kategori%'";
                        }  
                        $sql_k .="ORDER BY `kategori_kelas` LIMIT $posisi, $batas";
                        $query_k = mysqli_query($koneksi,$sql_k);
                        $no = $posisi+1;
                        while ($data_k = mysqli_fetch_row($query_k)) {
                         $id_kategori_kelas = $data_k[0];
                         $kategori_kelas = $data_k[1];
                         $deskripsi = $data_k[2]; 

                      ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $kategori_kelas; ?></td>
                              <td><?php echo $deskripsi; ?></td>
                              <td align="center">
                                <a href="edit-kategori-kelas-data-<?php echo $id_kategori_kelas; ?>"
                                class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit
                                </a>

                                <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $kategori_kelas; ?>?'))window.location.href = 'kategori-kelas-data-<?php echo $id_kategori_kelas;?>-mode-hapus_notif-hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i> Hapus</a>
                              </td>

                            </tr>
                    <?php $no++; } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <?php
                $sql_jum ="SELECT `id_kategori_kelas`, `kategori_kelas` FROM `kategori_kelas`";
                if (!empty($katakunci_kategori)){
                  $sql_jum .= " where `kategori_kelas` LIKE '%$katakunci_kategori%'";       
                }        
                $sql_jum .= "ORDER BY `kategori_kelas`";
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
                  echo "<li class='page-item'><a class='page-link' href='kategori-kelas-halaman-1'>First</a></li>";
                  echo "<li class='page-item'><a class='page-link' href='kategori-kelas-halaman-$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                  if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                  if($i!=$halaman){
                  echo "<li class='page-item'><a class='page-link' href='kategori-kelas-halaman-$i'>$i</a></li>";
                  }else{
                  echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                  }
                  }
                  }
                  if($halaman!=$jum_halaman){
                  echo "<li class='page-item'><a class='page-link' href='kategori-kelas-halaman-$setelah'>»</a></li>";
                  echo "<li class='page-item'><a class='page-link' href='kategori-kelas-halaman-$jum_halaman'>Last</a></li>";
                  }
                  }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->