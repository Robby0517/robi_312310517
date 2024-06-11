<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "UTS_312310517";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>