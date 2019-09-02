<?php

$server= "localhost";
$user= "root";
$password= "";
$database= "db_antrian_klinik";

$koneksi=mysqli_connect($server, $user, $password, $database);

if(!$koneksi)
{
	echo "gagal";
}else{
	//echo "koneksi berhasil";
}

?>