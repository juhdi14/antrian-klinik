<?php 
include "koneksi.php";
$nomor_tersedia=$_POST['nomor_tersedia'];

$sql = "UPDATE `tampil` SET `nomor_tersedia` = '$nomor_tersedia'";
$query = mysqli_query($koneksi, $sql);


header("Location:http://localhost/antrian_klinik/tampil_admin.php");
?>