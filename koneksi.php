<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "nama_database_kamu"; // Ganti dengan nama database latihanmu

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>