<?php
  $id_user = $_SESSION['id_user'];
  $timezone = new DateTimeZone('Asia/Jakarta');
  $date = new DateTime();
  $date->setTimeZone($timezone);
?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah artikel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="artikel">artikel</a></li>
              <li class="breadcrumb-item active">Tambah artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah artikel</h3>
        <div class="card-tools">
          <a href="artikel" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
     
      <div class="col-sm-10">
      <?php if (!empty($_GET['notif'])) { ?>
        <?php if($_GET['notif']=="fotokosong"){ ?>
          <div class="alert alert-danger" role="alert">
            Maaf anda harus upload foto
          </div>
       <?php } elseif ($_GET['notif']=="artikelkosong") { ?>
           <div class="alert alert-danger" role="alert">
            Maaf kategori tidak boleh kosong
          </div>   
       <?php } elseif ($_GET['notif']=="judulkosong") { ?>
           <div class="alert alert-danger" role="alert">
            Maaf judul tidak boleh kosong
          </div>   
       <?php } elseif ($_GET['notif']=="isikosong") { ?>
           <div class="alert alert-danger" role="alert">
            Maaf isi tidak boleh kosong
          </div>   
       <?php } ?>
       <?php } ?>
      </div>
     

      
      <form class="form-horizontal" method="post" action="konfirmasi-tambah-artikel" enctype="multipart/form-data">
        <div class="card-body">
        <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Foto </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="kategori" class="col-sm-3 col-form-label">Kategori Artikel</label>
            <div class="col-sm-7">
              <select class="form-control" id="kategoriartikel" name="kategori_artikel">
                <option value="0">- Pilih Kategori -</option>
                <?php
                  $sql_k = "SELECT `id_kategori_artikel`, `kategori_artikel` FROM 
                           `kategori_artikel` ORDER BY `kategori_artikel`";
                  $query_k = mysqli_query($koneksi,$sql_k);
                  while ($data_k = mysqli_fetch_row($query_k)) {
                    $id_kat = $data_k[0];
                    $kat = $data_k[1];
                  
                ?>
                  <option value="<?php echo $id_kat; ?>"><?php echo $kat; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="judulartikel" class="col-sm-3 col-form-label">Judul artikel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="judul" name="judul" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="sinopsis" class="col-sm-3 col-form-label">Isi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="isi" id="editor1" rows="12"></textarea>
              <input hidden type="text" class="form-control" name="tanggal" id="tanggal" value="<?php echo $date->format('Y-m-d');?>">
              <input hidden type="text" class="form-control" name="id_user" id="id_user" value="<?php echo $_SESSION['id_user']; ?>">
            </div>
          </div>  
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->