<?php

include('../util/connection.php');

if (isset($_POST['merk']) and !empty($_POST['merk'])) {
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $tahun = $_POST['tahun'];
    $sql = "UPDATE tb_hp2 SET merk='$merk', type='$type', tahun='$tahun' WHERE id='$id'";
    $result = pg_affected_rows(pg_query($sql));
    if($result == 1) {
        echo '<script type="text/javascript">';
        echo 'alert("Perubahan data telah tersimpan");';
        echo 'window.location.href="../index.php";';
        echo "</script>";
    }
    else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Mengubah Data</div>';
        header("location:../ubah.php?id=$id");   
    }
}

?>
