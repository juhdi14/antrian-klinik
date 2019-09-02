<html>
<head>
    <title>KLINIK dr.TAUFIQ CIRACAP</title>
<body>
 
<?php
$urutawal=$_GET['urutselanjutnya'];
$urutselanjutnya=$urutawal+1;
?>
   
    <center><h1><b><font color="black" style="margin-bottom: 1px">APLIKASI UPDATE ANTRIAN</font></b></h1></center>
    <center><h3><font color="green">KLINIK dr. TAUFIQ CIRACAP</font></h3></center><br><br>

     <center><h3><font color="black" style="margin-bottom: 1px">SETELAH ISTIRAHAT ANTRIAN NO <?php echo $urutselanjutnya ?></font></b></h1></center>
     <center><b><font color="black" style="margin-bottom: 1px" size="40px">ISTIRAHAT</font></b></center><br>

     <center><a type="button" value="MULAI" href="proses_tutup.php">TUTUP</a>
     <a type="submit" value="MULAI" href="proses_halaman_user_selanjutnya.php?urutawal=<?php echo $urutawal?>">MULAI</a></center>


     <br><br><br>


     <?php
        include "koneksi.php"; 

        $sql = "SELECT * FROM `tampil`";
        $data = mysqli_query($koneksi,$sql);      
        while($tampil = mysqli_fetch_array($data)){

        ?>

        <form action="prosesubahnomortersedia.php" method="POST">
            <input type="text" name="halaman_yang_dibuka" required="true" value="Location:http://localhost/antrian_klinik/halaman_user_istirahat.php?urutselanjutnya=<?php echo $urutawal?>">
            <br>
            <label>NOMOR ANTRIAN YANG MASIH TERSEDIA </label>
		    <input type="NUMBER" name="nomor_tersedia" required="true" value="<?php echo $tampil['nomor_tersedia']; ?>">
		    <label for="exampleInputPassword1">DAN SETERUSNYA </label>
		   <button type="submit">OK</button>
		 </form>

       <?php } ?>

</body>
</head>
</html>