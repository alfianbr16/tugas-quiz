<?php
$server = "localhost";
$user = "root";
$password = "";
$namadb = "absensi_perkuliahan";

$db = mysqli_connect($server, $user, $password, $namadb);

if(!$db){
    die("gagal terhubung dengan database :" .mysqli_connect_error());
}
?>