<?php 
include "koneksi.php";
$nomor_tersedia=$_POST['nomor_tersedia'];
$halaman_yang_dibuka=$_POST['halaman_yang_dibuka'];

$sql = "UPDATE `tampil` SET `nomor_tersedia` = '$nomor_tersedia'";
$query = mysqli_query($koneksi, $sql);


header("$halaman_yang_dibuka");
?>