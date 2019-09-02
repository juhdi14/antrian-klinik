<?php 
$urutawal=$_GET['urutawal'];

$urutselanjutnya=$urutawal + 1;

include "koneksi.php";
$status=$urutselanjutnya;
$keterangan="SEDANG DALAM PELAYANAN";

$sql = "UPDATE `tampil` SET `status` = '$status' , `keterangan` = '$keterangan'";
$query = mysqli_query($koneksi, $sql);


header("Location:http://localhost/antrian_klinik/halaman_user_selanjutnya.php?urutselanjutnya=$urutselanjutnya");
?>