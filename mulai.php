<?php 
include "koneksi.php";
$status=1;
$keterangan="SEDANG DALAM PELAYANAN";

$sql = "UPDATE `tampil` SET `status` = '$status' , `keterangan` = '$keterangan'";
$query = mysqli_query($koneksi, $sql);

header("Location:http://localhost/antrian_klinik/tampil_admin.php");
?>