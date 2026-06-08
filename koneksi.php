<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan_backend_kopi";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>