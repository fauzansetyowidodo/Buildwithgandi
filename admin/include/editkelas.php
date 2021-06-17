<?php
  if (isset($_GET['data'])) {
    $id_kelas = $_GET['data'];
    $_SESSION['id_kelas'] = $id_kelas;
    $sql_m = "SELECT `b`.`id_kelas`, `b`.`foto`, `b`.`nama_kelas`, `b`.`deskripsi`,  
    `k`.`kategori_kelas`, `p`.`nama`, `b`.`id_mentor`, `b`.`id_kategori_kelas` FROM  `kelas` `b`
     INNER JOIN `kategori_kelas` `k` ON `b`.`id_kategori_kelas` =
     `k` . `id_kategori_kelas` INNER JOIN `mentor` `p` ON 
     `b`.`id_mentor` = `p`.`id_mentor` WHERE `b`.`id_kelas` = '$id_kelas'";
    $query_m = mysqli_query($koneksi,$sql_m);
    while ($data_m = mysqli_fetch_row($query_m)) {
      $id_kelas = $data_m[0];
      $foto = $data_m[1];
      $nama_kelas = $data_m[2];
      $deskripsi = $data_m[3];
      $kategori_kelas = $data_m[4];
      $nama = $data_m[5];
      $id_mentor = $data_m[6];
      $id_kategori_kelas = $data_m[7];

    }
  }
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Kelas</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="kelas">Data kelas</a></li>
              <li class="breadcrumb-item active">Edit Data kelas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Kelas</h3>
        <div class="card-tools">
          <a href="kelas" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <div class="col-sm-10">
      <div class="col-sm-10">
      <?php if (!empty($_GET['notif'])) { ?>
        <?php if($_GET['notif']=="fotokosong"){ ?>
          <div class="alert alert-danger" role="alert">
            Maaf anda harus upload foto
          </div>
       <?php } elseif ($_GET['notif']=="namakosong") { ?>
           <div class="alert alert-danger" role="alert">
            Maaf nama kelas tidak boleh kosong
          </div>   
       <?php } elseif ($_GET['notif']=="deskripsikosong") { ?>
           <div class="alert alert-danger" role="alert">
            Maaf deskripsi tidak boleh kosong
          </div>   
       <?php } elseif ($_GET['notif']=="mentorkosong") { ?>
           <div class="alert alert-danger" role="alert">
            Maaf mentor tidak boleh kosong
          </div>   
       <?php } else { ?>
           <div class="alert alert-danger" role="alert">
           maaf kategori tidak boleh kosong
          </div>   
       <?php } ?>
       <?php } ?>
      </div>
      <form class="form-horizontal" action="konfirmasi-edit-kelas" method="post" enctype="multipart/form-data">
        <div class="card-body">
          
        <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Foto Kelas </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto" id="foto">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="nim" class="col-sm-3 col-form-label">Nama Kelas</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" value="<?php echo $nama_kelas; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="deskripsi" id="editor1" rows="12"><?php echo $deskripsi; ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="mentor" class="col-sm-3 col-form-label">Mentor</label>
            <div class="col-sm-7">
              <select class="form-control" id="id_mentor" name="id_mentor">
                <option value="0">- Pilih Mentor -</option>
                <?php
                  $sql_k = "SELECT `id_mentor`, `nama` FROM `mentor` ORDER BY `nama`";
                  $query_k = mysqli_query($koneksi,$sql_k);
                  while ($data_k = mysqli_fetch_row($query_k)) {
                    $id_nama = $data_k[0];
                    $nama = $data_k[1];
                  
                ?>
                 <option value="<?php echo $id_nama;?>"
                  <?php if($id_nama==$id_mentor){?>
                  selected <?php }?>><?php echo $nama;?></option>
                  <?php }?>
                
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="kategori" class="col-sm-3 col-form-label">Kategori Kelas</label>
            <div class="col-sm-7">
              <select class="form-control" id="id_kategori_kelas" name="id_kategori_kelas">
                <option value="0">- Pilih kategori kelas -</option>
                <?php
                  $sql_k = "SELECT `id_kategori_kelas`, `kategori_kelas` FROM `kategori_kelas` ORDER BY `kategori_kelas`";
                  $query_k = mysqli_query($koneksi,$sql_k);
                  while ($data_k = mysqli_fetch_row($query_k)) {
                    $id_katk= $data_k[0];
                    $katk = $data_k[1];
                  
                ?>
                 <option value="<?php echo $id_katk;?>"
                  <?php if($id_katk==$id_kategori_kelas){?>
                  selected <?php }?>><?php echo $katk;?></option>
                  <?php }?>
                
              </select>
            </div>
          </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
