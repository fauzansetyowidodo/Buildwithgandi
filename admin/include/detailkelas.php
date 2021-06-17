<?php

  $id_kelas = $_GET['data'];
  //gat data buku
  $sql_b = "SELECT `b`.`id_kelas`, `b`.`foto`, `b`.`nama_kelas`, `b`.`deskripsi`,  
  `k`.`kategori_kelas`, `p`.`nama` FROM  `kelas` `b`
   INNER JOIN `kategori_kelas` `k` ON `b`.`id_kategori_kelas` =
   `k` . `id_kategori_kelas` INNER JOIN `mentor` `p` ON 
   `b`.`id_mentor` = `p`.`id_mentor` WHERE `b`.`id_kelas`='$id_kelas'";

  $query = mysqli_query($koneksi,$sql_b);
  while ($data = mysqli_fetch_row($query)) {
    $id_kelas = $data[0];
    $foto = $data[1];
    $nama_kelas = $data[2];
    $deskripsi = $data[3];
    $kategori_kelas = $data[4];
    $nama = $data[5];

  }

?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data Kelas</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="kelas">Data Kelas</a></li>
              <li class="breadcrumb-item active">Detail Data Kelas</li>
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
                  <a href="kelas" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered">
                <tbody>
                <tr>
                <td><strong>Foto Kelas<strong></td>
                <td><img src="foto_kelas/<?php echo $foto;?>"
                class="img-fluid" width="200px;"></td>
                </tr>
                <tr>
                <td width="20%"><strong>Nama Kelas<strong></td>
                <td width="80%"><?php echo $nama_kelas;?></td>
                </tr>
                <tr>
                <td width="20%"><strong>Deskripsi<strong></td>
                <td width="80%"><?php echo $deskripsi;?></td>
                </tr>
                <tr>
                <td width="20%"><strong>Mentor<strong></td>
                <td width="80%"><?php echo $nama;?></td>
                </tr>
                <tr>
                <td width="20%"><strong>Kategori Kelas<strong></td>
                <td width="80%"><?php echo $kategori_kelas;?></td>
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