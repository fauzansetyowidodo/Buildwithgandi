<?php
    include('includes/fungsi.php');
    function limit_text($text, $limit)
    {
        if (str_word_count($text, 0)>$limit) {
            $words = str_word_count($text, 2);
            $pos  = array_keys($words);
            $text  = substr($text, 0, $pos[$limit]) . '...';
    
        }
        return $text;
    }
    $batas = 4;
    if(!isset($_GET['halaman'])){
        $posisi = 0;
        $halaman = 1;
    }else{
        $halaman = $_GET['halaman'];
        $posisi = ($halaman-1) * $batas;
    }
    $sql_b = "SELECT `b`.`id_artikel`, `b`.`judul_artikel`, `b`.`tanggal`, `b`.`foto`, `k`.`kategori_artikel` FROM `artikel` `b` INNER JOIN `kategori_artikel` `k` ON `b`.`id_kategori_artikel` = `k`.`id_kategori_artikel` WHERE MONTH(`b`.`tanggal`) = $bulan AND YEAR(`b`.`tanggal`) = $tahun ORDER BY `b`.`judul_artikel` LIMIT $posisi, $batas";       
            
    $query_b = mysqli_query($koneksi,$sql_b);
    $row = mysqli_num_rows($query_b);
    if($row == 0 ){
        ?>
        
            <h3>Artikel tidak tersedia</h3>
        
        <?php
    }else{
        while($data_b = mysqli_fetch_row($query_b)){
            $id_artikel = $data_b[0];
            $judul_artikel = $data_b[1];
            $tanggal = $data_b[2];
            $foto = $data_b[3];
            $kategori_artikel = $data_b[4];
        ?>
            <div class="col-md-11">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static bg-light">
                    <strong class="d-inline-block mb-2 text-success"><?php echo $kategori_artikel; ?></strong>
                    <h3 class="mb-0"><a href="detail-artikel-data-<?php echo $id_artikel; ?>"><?php echo $judul_artikel; ?></a></h3>
                    <div class="mb-1 text-muted"><?php echo TanggalIndo($tanggal); ?></div>
                    <!--<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>-->
                    <!-- <a href="#" class="stretched-link">Continue reading</a> -->
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="admin/cover/<?php echo $foto; ?>" class="img-card" title="book title here">
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="col-sm-12">
    <nav aria-label="Page navigation">
        <?php 
            $sql_b = "SELECT `b`.`id_artikel`, `b`.`judul_artikel`, `b`.`tanggal`, `b`.`foto`, `k`.`kategori_artikel` FROM `artikel` `b` INNER JOIN `kategori_artikel` `k` ON `b`.`id_kategori_artikel` = `k`.`id_kategori_artikel` WHERE MONTH(`b`.`tanggal`) = $bulan AND YEAR(`b`.`tanggal`) = $tahun ORDER BY `b`.`judul_artikel`";
             $query_jum = mysqli_query($koneksi, $sql_b);
            $jum_data = mysqli_num_rows($query_jum);
             $jum_halaman = ceil($jum_data/$batas);
         ?>
        <ul class="pagination">
            <?php
                                if($jum_halaman==0){
                                    // tidak ada halaman
                                }else if($jum_halaman==1){
                                    echo "<li class='page-item'><a class='page-link'>1</a></li>";
                                }else{
                                    $sebelum = $halaman - 1;
                                    $setelah = $halaman + 1;
                                    if($halaman!=1){
                                        echo "
                                            <li class='page-item'>
                                               <a class='page-link'href='daftar-artikel-arsip-data-$data-halaman-1'>First</a>
                                            </li>
                                            ";
                                            echo "
                                                <li class='page-item'>
                                                    <a class='page-link'href='daftar-artikel-arsip-data-$data-halaman-$sebelum'>«</a>
                                                 </li>
                                            ";
                                    }
                                    for($i=1; $i<=$jum_halaman; $i++){
                                            if($i > $halaman - 5 and $i < $halaman + 5){
                                                if($i!=$halaman){
                                                    echo "
                                                        <li class='page-item'>
                                                            <a class='page-link' href='daftar-artikel-arsip-data-$data-halaman-$i'>$i</a>
                                                        </li>
                                                    ";
                                                }else{
                                                    echo "
                                                        <li class='page-item'>
                                                            <a class='page-link'>$i</a>
                                                        </li>
                                                    ";
                                                }
                                            }
                                        }
                                        if($halaman!=$jum_halaman){
                                            echo "
                                            <li class='page-item'>
                                            <a class='page-link' href='daftar-artikel-arsip-data-$data-halaman-$setelah'>
                                            »</a></li>
                                            ";
                                            echo "
                                            <li class='page-item'><a class='page-link' href='daftar-artikel-arsip-data-$data-halaman-$jum_halaman'>Last</a></li>
                                            ";
                                        }
                                    }
                                
                            ?>
        </ul>
    </nav>
</div>

<?php } ?>