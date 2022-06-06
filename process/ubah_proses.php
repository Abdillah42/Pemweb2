<?php

include('../util/connection.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $type = $_POST['type'];
    $tahun = $_POST['tahun'];
    $sql = "UPDATE tb_hp2 SET merk='$merk', type='$type', tahun='$tahun', WHERE id='$id'";
    $result = pg_affected_rows(pg_query($sql));
    
    header("location:index.php?pesan=update");
}

?>
