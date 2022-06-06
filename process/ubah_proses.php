<?php

include('../util/connection.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $tahun = $_POST['tahun'];
    $sql = "UPDATE tb_hp2 SET merk='$merk', type='$type', tahun='$tahun', updated WHERE id='$id'";
    $result = pg_affected_rows(pg_query($sql));
     if($result >= 1) {
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Berhasil Mengubah Data</div>';
        header("location:../index.php");
    }
    else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Mengubah Data</div>';
        header("location:../ubah.php?id=$id");  
    }
}

?>
