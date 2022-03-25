<?php

session_start();
$host = "rosie.db.elephantsql.com ";
$port = "port = 5432";
$dbname = "dbname = tb_mahasiswa";
$username = "qwnnuslh";
$password = "yvrSLjdqCk1EAfnCmAyZcGWzIV7Hw4Xb";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "berhasil connect";
} else {
    echo "gagal connect";
}

?>
