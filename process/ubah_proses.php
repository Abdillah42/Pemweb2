<?php

include('../util/connection.php');
$sql = "select * from tb_hp2 where id='" . $_GET['id'] . "'";
$result = pg_query($sql);
$data = pg_fetch_object($result);

if(isset($_POST['id']) and !empty($_POST['id'])) {
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $tahun = $_POST['tahun'];
    $sql = "update tb_hp2 set merk='" . $_POST['merk'] . "', type='" . $_POST['type'] . "', tahun='" .   $_POST['tahun'] . "'"
        "where id='" . $_POST['id'] . "'";
    $result = pg_affected_rows(pg_query($sql));
    
    if($result == 1) {
        echo '<script type="text/javascript">';
        echo 'alert("Perubahan telah tersimpan");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
    else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Mengubah Data</div>';
        header("location:../ubah.php?id=$id");   
    } 
}

?>
