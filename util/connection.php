<?php

session_start();
$host = "host = john.db.elephantsql.com";
$port = "port = 5432";
$dbname = "dbname = qwnnuslh";
$username = "user = qwnnuslh";
$password = "password = yvrSLjdqCk1EAfnCmAyZcGWzIV7Hw4Xb";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "berhasil connect";
} else {
    echo "gagal connect";
}

?>
