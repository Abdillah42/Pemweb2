<?php

session_start();
$host = "host = john.db.elephantsql.com";
$port = "port = 5432";
$dbname = "dbname = qwnnuslh";
$username = "user = qwnnuslh";
$password = "password = 6WQ4vX4u4WKMl9ocLEZLnj9-64w1q1Od";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "berhasil connect";
} else {
    echo "gagal connect";
}

?>
