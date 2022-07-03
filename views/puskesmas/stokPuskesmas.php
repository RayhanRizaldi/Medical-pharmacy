<?php 
    require_once '../partials/header.php';
    // require_once '../farmasi/functions.php';
    // require_once 'functionsPuskesmas.php';
    $stok = query("SELECT * FROM stokpuskesmas
    INNER JOIN obat ON stokpuskesmas.obat_id = obat.kode_obat ORDER BY tanggal_update DESC");
    $stokOb = query("SELECT * FROM stok 
    INNER JOIN obat ON stok.kode_obat = obat.kode_obat ORDER BY nama_obat ASC
    ");

?>
<?php if(isset($_SESSION['eksekusi'])): ?>
    <?php if($_SESSION['eksekusi'] == "ubah" ): ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Obat berhasil diubah !</strong> 
        </div>
    <?php elseif($_SESSION['eksekusi'] == "kirim" ): ?>
        <div class="alert alert-info alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Request obat berhasil dikirim !</strong> 
        </div>
    <?php elseif($_SESSION['eksekusi'] == "hapus" ): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Obat berhasil dihapus !</strong> 
        </div>
    <?php endif; ?>
<?php 
unset($_SESSION['eksekusi']);
endif; 
?>
              <div id="layoutSidenav_content">
                <main>
                <?php require_once '../partials/listobat.php' ?>
                    <div class="container-fluid px-4">
                     

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Riwayat Obat Diterima
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Update</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <?php $i = 1; ?>
                                            <?php foreach( $stok as $row ) : ?>
                                                <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row["nama_obat"] ?></td>
                                                <td><?= $row["jumlah_stok"] ?></td>
                                                <td><?= $row["obat_satuan"] ?></td>
                                                <td><?= $row["tanggal_update"] ?></td>
                                    
                                                </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                
                </main>
        </div>
        <?php require_once '../partials/footer.php' ?>