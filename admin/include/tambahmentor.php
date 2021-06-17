    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Mentor</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mentor">Data Mentor</a></li>
              <li class="breadcrumb-item active">Tambah Mentor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Mentor</h3>
        <div class="card-tools">
          <a href="mentor" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>

      <div class="col-sm-10">
      <?php if (!empty($_GET['notif'])) { ?>
        <?php if($_GET['notif']=="fotokosong"){ ?>
          <div class="alert alert-danger" role="alert">
            Maaf anda harus upload foto
          </div>
       <?php } elseif ($_GET['notif']=="namakosong") { ?>
           <div class="alert alert-danger" role="alert">
            Maaf nama anda tidak boleh kosong
          </div>   
       <?php } elseif ($_GET['notif']=="emailkosong") { ?>
           <div class="alert alert-danger" role="alert">
            Maaf email tidak boleh kosong
          </div>   
       <?php } elseif ($_GET['notif']=="rolekosong") { ?>
        <div class="alert alert-danger" role="alert">
            Maaf role tidak boleh kosong
          </div>
       <?php } elseif ($_GET['notif']=="deskripsikosong") { ?>
        <div class="alert alert-danger" role="alert">
            Maaf deskripsi tidak boleh kosong
          </div>
     <?php  } ?>
       <?php } ?>
      </div>

      <form class="form-horizontal" method="post" action="konfirmasi-tambah-mentor" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Foto </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto" id="foto">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="nama" name="nama" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="email" name="email" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="role" class="col-sm-3 col-form-label">Role Pekerjaan</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="role_pekerjaan" name="role_pekerjaan" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="sinopsis" class="col-sm-3 col-form-label">deskripsi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="deskripsi" id="editor1" rows="12"></textarea>
            </div>
          </div>
      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>