<?php 
                    $level = $_SESSION["level"] == 'admin';
                    if($level){
                ?>
                    <div class="container-fluid px-4 mt-3">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-table me-1"></i>
                                                    Stok Obat
                                                </div>
                                                
                                                <div class="card-body">
                                                    <table id="datatablesSimple">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Obat </th>
                                                                <th>jumlah</th>
                                                                <th>Satuan</th>
                                                                <th>Tanggal Udate</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Obat </th>
                                                                <th>jumlah</th>
                                                                <th>Satuan</th>
                                                                <th>Tanggal Udate</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                            <?php $i = 1; ?>
                                                                <?php foreach( $stokOb as $row ) : ?>
                                                                    <tr>
                                                                    <td><?= $i ?></td>
                                                                    <td><?= $row["nama_obat"] ?></td>
                                                                    <td><?= $row["jumlah"] ?></td>
                                                                    <td><?= $row["satuan"] ?></td>
                                                                    <td><?= $row["updated_at"] ?></td>
                                                                    <td>
                                                                    <button type="button" class="btn btn-success"><a href="ubahObat.php?id=<?= $row["id"]; ?>"><i class='bx bx-edit-alt' ></i></a></button>&nbsp;
                                                                    <button type="button" class="btn btn-danger"><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('data akan terhapus')"><i class='bx bx-trash'></i></a></button>
                                                                    </td>
                                                                    </tr>
                                                                <?php $i++; ?>
                                                            <?php endforeach; ?>

                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                <?php }else{?>
                    <div class="container-fluid px-4 mt-3">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-table me-1"></i>
                                                    Stok Obat
                                                </div>
                                                
                                                <div class="card-body">
                                                    <table id="datatablesSimple">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Obat </th>
                                                                <th>jumlah</th>
                                                                <th>Satuan</th>
                                                                <th>Tanggal Udate</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Obat </th>
                                                                <th>jumlah</th>
                                                                <th>Satuan</th>
                                                                <th>Tanggal Udate</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                            <?php $i = 1; ?>
                                                                <?php foreach( $stokOb as $row ) : ?>
                                                                    <tr>
                                                                    <td><?= $i ?></td>
                                                                    <td><?= $row["nama_obat"] ?></td>
                                                                    <td><?= $row["jumlah"] ?></td>
                                                                    <td><?= $row["satuan"] ?></td>
                                                                    <td><?= $row["updated_at"] ?></td>
                                                                    <td>
                                                                    <button type="button" class="btn btn-primary"><a href="puskesmas_formreq.php?id=<?= $row["kode_obat"]; ?>"><i class='bx bx-mail-send'></i></i></a></button>&nbsp;
                                                                    </td>
                                                                    </tr>
                                                                <?php $i++; ?>
                                                            <?php endforeach; ?>

                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                <?php } ?>