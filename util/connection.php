<?php

session_start();
$host = "postgres://qwnnuslh:yvrSLjdqCk1EAfnCmAyZcGWzIV7Hw4Xb@rosie.db.elephantsql.com/qwnnuslh";
$port = "5432";
$dbname = "tb_mahasiswa";
$username = "qwnnuslh";
$password = "yvrSLjdqCk1EAfnCmAyZcGWzIV7Hw4Xb";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "berhasil connect";
} else {
    echo "gagal connect";
}

?>