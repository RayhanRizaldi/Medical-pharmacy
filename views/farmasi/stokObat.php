<?php 

  require_once '../partials/header.php';
  require_once 'functions.php';

  if(isset($_SESSION["level"]) == "user" && $_SESSION["level"] != "admin"){
    echo "Anda Tidak Memiliki Hak Akses";
    exit;
  }
  $stokOb = query("SELECT * FROM stok 
                INNER JOIN obat ON stok.kode_obat = obat.kode_obat ORDER BY nama_obat ASC
                ");
  // while($user = pg_fetch_assoc($result)){
  //   var_dump($user);
  // }
?>
<?php if(isset($_SESSION['eksekusi'])): ?>
    <?php if($_SESSION['eksekusi'] == "tambah"): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Obat berhasil ditambahkan !</strong> 
        </div>
    <?php elseif($_SESSION['eksekusi'] == "ubah" ): ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Obat berhasil diubah !</strong> 
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

<main class="container">
                <button type="button" class="btn btn-secondary text-center ml-4" ><i class='bx-fw bx bx-plus'></i><a href="addStokObat.php">Tambah</a></button>
                
                <?php require_once '../partials/listobat.php' ?>
                </main>

<?php require_once '../partials/footer.php' ?>