<?php 

include('util/connection.php'); 

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include('util/head.php'); ?>
    </head>

    <body>
        <?php include('util/navbar.php'); ?>

        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="pt-5">
                <h3 class="text-center"><b>Tambah Data</b></h3>
                <?php if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                } ?>
            </div>
            <div class="card mt-5">
                <form action="process/tambah_proses.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nim">Merk Hp</label>
                            <input type="number" class="form-control" id="merk" name="merk" placeholder="Masukan Merk..." required>
                        </div>
                        <div class="form-group">
                            <label for="nim">Type</label>
                            <input type="number" class="form-control" id="type" name="type" placeholder="Masukan Type..." required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tahun Produksi</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun..." required>
                        </div>  
                    <div class="card-footer text-right">
                        <button class="btn btn-danger mr-3" type="button" onclick="history.back()">Batal</button>
                        <input type="submit" name="submit" value="Simpan" onclick="return confirm('Apakah anda yakin?')" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

        <?php include('util/js.php'); ?>

    </body>
</html>
