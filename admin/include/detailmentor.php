
<?php
  if (isset($_GET['data'])) {
    $id_mentor = $_GET['data'];
    //get data buku
    $sql_k = "SELECT b.id_mentor,b.foto,b.nama,b.email,b.role_pekerjaan,b.deskripsi FROM mentor b WHERE b.id_mentor='$id_mentor'";
    $query = mysqli_query($koneksi,$sql_k);
    while ($data = mysqli_fetch_row($query)) {
      $id_mentor = $data[0];
      $foto = $data[1];
      $nama = $data[2];
      $email = $data[3];
      $role_pekerjaan = $data[4];
      $deskripsi = $data[5];
    }
  }
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data Mentor</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="mentor">Data Mentor</a></li>
              <li class="breadcrumb-item active">Detail Data Mentor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="mentor" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>Data Mentor<strong></td>
                      </tr>    
                      <tr>
                        <td><strong>Foto Mentor<strong></td>
                        <td><img src="foto_mentor/<?php echo $foto; ?>" class="img-fluid" width="200px;"></td>
                      </tr>              
                      <tr>
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%"><?php echo $nama; ?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%"><?php echo $email; ?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Role Pekerjaan<strong></td>
                        <td width="80%"><?php echo $role_pekerjaan; ?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Deskripsi<strong></td>
                        <td width="80%"><?php echo $deskripsi; ?></td>
                      </tr> 
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->