<?php

$server = "127.0.0.1:3307";
$user = "root";
$password = "";
$nama_database = "dbpus";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>

