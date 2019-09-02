<?php 
include "koneksi.php";
$status="TUTUP";
$keterangan="BELUM BISA MENGAMBIL NOMOR ANTRIAN";
$nomor_tersedia=0;

$sql = "UPDATE `tampil` SET `status` = '$status' , `keterangan` = '$keterangan' , `nomor_tersedia` = '$nomor_tersedia'";
$query = mysqli_query($koneksi, $sql);

header("Location:http://localhost/antrian_klinik/halaman_tutup.php");
?>