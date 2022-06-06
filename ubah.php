<?php
include('connection.php');

$sql = "select * from tb_hp2 where id='" . $_GET['id'] . "'";
$result = pg_query($sql);
$data = pg_fetch_object($result);
?>

<h3>Form Ubah Data</h3>

<form method="post">
    Merk : 
<?php echo '<input type="text" name="merk" value="' . $data->merk . '" readonly></br>' ?>
    Type : 
<?php echo '<input type="text" name="type" value="' . $data->type . '"></br>' ?>
    Tahun Produksi : 
<?php echo '<input type="text" name="tahun" value="' . $data->tahun . '"></br>' ?>
    <input type="submit" value="Simpan">
</form>

<?php
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
