<?php

include('../util/connection.php');

if (isset($_POST['merk']) and !empty($_POST['merk'])) {
    $merk = $_POST['Merk']
    $type = $_POST['type'];
    $tahun = $_POST['Tahun Produksi'];
    $sql = "UPDATE tb_hp SET merk='$merk', type='$type', tahun='$tahun' WHERE id='$id'";
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
