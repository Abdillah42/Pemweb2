<?php

include('../util/connection.php');

if(isset($_POST['merk']) and !empty($_POST['merk'])) {
    $sql = "update tb_hp2 set merk='" . $_POST['merk'] . "', type='" . $_POST['type'] . "', tahun='" .   $_POST['tahun'] . "' " .
        "where id='" . $_POST['id'] . "'";
    $result = pg_affected_rows(pg_query($sql));
    
    if($result == 1) {
        echo '<script type="text/javascript">';
        echo 'alert("Perubahan telah tersimpan");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
}

?>
