<?php 
$urutawal=$_GET['urutawal'];

$urutselanjutnya=$urutawal;

$selanjutnya=$urutawal+1;

include "koneksi.php";
$status="ISTIRAHAT";
$keterangan="SETELAH ISTIRAHAT NOMOR ANTRIAN $selanjutnya";

$sql = "UPDATE `tampil` SET `status` = '$status' , `keterangan` = '$keterangan'";
$query = mysqli_query($koneksi, $sql);

header("Location:http://localhost/antrian_klinik/halaman_user_istirahat.php?urutselanjutnya=$urutselanjutnya");
?>