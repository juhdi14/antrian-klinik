<?php 
include "koneksi.php";
$status="BUKA";
$keterangan="SUDAH BISA MENGAMBIL NOMOR ANTRIAN";
$nomor_tersedia=1;

$sql = "UPDATE `tampil` SET `status` = '$status' , `keterangan` = '$keterangan' , `nomor_tersedia` = '$nomor_tersedia'";
$query = mysqli_query($koneksi, $sql);

header("Location:http://localhost/antrian_klinik/tampil_admin.php");
?>