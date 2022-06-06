<?php

include('util/connection.php');

$statement = pg_query($connection, "SELECT * FROM tb_hp2 WHERE id=".$_GET['id']);
while ($row = pg_fetch_array($statement)) {
    $id = $row['id'];
    $merk = $row['merk'];
    $type = $row['type'];
    $tahun = $row['tahun'];
}

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include('util/head.php') ?>
    </head>

    <body>
        <?php include('util/navbar.php') ?>
        
        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="pt-5">
                <h3 class="text-center"><b>Ubah Data</b></h3>
                <?php if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                } ?>
            </div>
            <div class="card mt-5">
                <form action="process/ubah_proses.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
                            <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $merk; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type" value="<?php echo $type; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun Produksi</label>
                            <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $tahun; ?>" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-danger mr-3" type="button" onclick="history.back()">Batal</button>
                        <input type="submit" name="submit" class="btn btn-success" value="Simpan" onclick="return confirm('Apakah Anda Yakin?')">
                    </div>
                </form>
            </div>
        </div>

        <?php include('util/js.php') ?>

    </body>
</html>
