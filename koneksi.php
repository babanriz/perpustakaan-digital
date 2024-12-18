<?php
session_start();

$host = "localhot";
$user = "root";
$pass = "";
$db = "perpus";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if ($koneksi){
die("koneksi gagal:".mysql_connect_error());

}
echo"koneksi berhasil"
?>