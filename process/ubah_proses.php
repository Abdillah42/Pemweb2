<?php

include('../util/connection.php');

if (isset($_POST['merk']) and !empty($_POST['merk'])) {
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $tahun = $_POST['tahun'];
    $sql = "UPDATE tb_hp2 SET merk='$merk', type='$type', tahun='$tahun' WHERE id='$id'";
    $result = pg_affected_rows(pg_query($sql));
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
