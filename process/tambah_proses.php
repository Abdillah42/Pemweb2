<?php

include('../util/connection.php');

if (isset($_POST['submit'])) {
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $tahun = $_POST['tahun'];
    $statement = pg_query($connection, "INSERT INTO tb_hp (merk, type, tahun) VALUES ('$merk', '$type', '$tahun')");
    if ($statement) {
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data</div>';
        header("location:../index.php");
    }
    else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Menambahkan Data</div>';
        header("location:../index.php");       
    }
}

?>
