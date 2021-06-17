<?php
if (isset($_GET['data'])){
  $id_kategori_kelas = $_GET['data'];
  $_SESSION['id_kategori_kelas'] = $id_kategori_kelas;
  //get data hobi
  $sql_d = "SELECT `kategori_kelas`, `deskripsi` FROM `kategori_kelas` WHERE `id_kategori_kelas` = '$id_kategori_kelas'";
  $query_d = mysqli_query($koneksi,$sql_d);
  while ($data_d = mysqli_fetch_row($query_d)){
    $kategori_kelas = $data_d[0];
    $deskripsi = $data_d[1];
    }
  } 
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Kategori Kelas</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="kategori-kelas">Kategori Kelas</a></li>
              <li class="breadcrumb-item active">Edit Kategori Kelas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Kategori Kelas</h3>
        <div class="card-tools">
          <a href="kategori-kelas" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
      <?php if (!empty($_GET['notif'])) { ?>
            <?php if ($_GET['notif']=="kategorikosong") { ?>
              <div class="alert alert-danger" role="alert">Maaf Kategori Kelas wajib di isi</div>
            <?php } elseif ($_GET['notif']=="deskripsikosong") { ?>
              <div class="alert alert-danger" role="alert">Maaf Deskripsi wajib di isi</div>
           
           <?php }?>
           
        <?php } ?>
      </div>
      <form class="form-horizontal" method="post" action="konfirmasi-edit-kategori-kelas">
        <div class="card-body">
          <div class="form-group row">
            <label for="Kategori Kelas" class="col-sm-3 col-form-label">Kategori Kelas</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="Kategori Kelas" name="kategori_kelas" value="<?php echo $kategori_kelas; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="sinopsis" class="col-sm-3 col-form-label">Deskripsi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="deskripsi" id="editor1" rows="12"><?php echo $deskripsi; ?></textarea>
            </div>
          </div>  
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
    </section>