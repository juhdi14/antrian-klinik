 <html>
<head>
    <link rel="icon" type="image/png" href="images/logoklinik2.png">
    <title>KLINIK dr.TAUFIQ CIRACAP</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
</head>
<style type="text/css">
body {
       margin: 30px;
}
.header{
    background-color: green; 
}
.header2{
    width: 50%;
    background-color: white; 
    
}.p{
    padding: 50px;
    background-image: url("images/Garena-Free-Fire.jpg");
    color: white;   
}.rotate {
animation-name: rotate ;
animation-duration: 5s;
animation-play-state: running;
animation-timing-function: linear;
animation-iteration-count: infinite;
opacity: 1.0;filter: alpha(opacity=50);
}
img:hover {
opacity: 1.0;
filter: alpha(opacity=100);
}
@keyframes rotate{
10% {transform:rotateY(36deg)}
20% {transform:rotateY(72deg)}
30% {transform:rotateY(108deg)}
40% {transform:rotateY(144deg)}
50% {transform:rotateY(180deg)}
60% {transform:rotateY(216deg)}
70% {transform:rotateY(252deg)}
80% {transform:rotateY(288deg)}
90% {transform:rotateY(324deg)}
100% {transform:rotateY(360deg)}
}
</style>

<body bgcolor="white">


 <?php
        include "koneksi.php"; 

        $sql = "SELECT * FROM `tampil`";
        $data = mysqli_query($koneksi,$sql);      
        while($tampil = mysqli_fetch_array($data)){
            if ($tampil['status']=="ISTIRAHAT") {
                $urutawal=$_GET['urutawal'];
            }else{
                $urutawal=$tampil['status'];
            }

        ?>
           
             <div class="header"><center><b><font color="black" size="30px">APLIKASI ANTRIAN BEROBAT</font></b></h1></center></div>

            
        <center><img src="images/logoklinik.png" height="200" width="430" style="margin-top: 0px" class="rotate"></center>
        <center><font color="black" size="5px">Jalan Raya Loji Kecamatan Ciracap, Kabupaten Sukabumi, 43176</font></center>



             <form action="ubah_nomor_tersedia.php" method="POST"><table width="25%" border="0">
                  <div class="form-group">
                    <tr>
                    <td width="15%"><label for="exampleInputPassword1">Nomor Antrian Yang Tersedia</label></td>
                    <td width="7%"><input type="number" class="form-control" id="exampleInputPassword1" name="nomor_tersedia" required="true" value="<?php echo $tampil['nomor_tersedia']; ?>"></td>
                    <td width="3%"><button type="submit" class="btn btn-success">O K</button></table></form></td>
                    </tr>
                   </div>
    

                <center>
                    <h3><font color="black" style="margin-bottom: 1px"><?php echo $tampil['keterangan']; ?></font></b></h3>
                </center>
                <center>
                    <b><font color="black" style="margin-bottom: 1px" size="40px"><?php echo $tampil['status']; ?></font></b><br>
                    
                    <?php 
                    if ($tampil['status']=="TUTUP") {
                    ?>
                    <form><table width="30%" border="0">
                      <tr>
                    <td width="30%" align="center"><a href="buka.php" type="submit" class="btn btn-success">BUKA</a></td>
                    </tr>  
                    </table></form>
                    <?php }elseif ($tampil['status']=="BUKA") {
                    ?>
                    <form><table width="30%" border="0">
                      <tr>
                    <td width="30%" align="center"><a href="mulai.php" type="submit" class="btn btn-success">MULAI</a></td>
                    </tr>  
                    </table></form>
                    <?php }elseif ($tampil['status']=="ISTIRAHAT") {
                    ?>
                    <form><table width="60%" border="0">
                      <tr>
                    <td width="30%" align="center"><a href="tutup.php" type="submit" class="btn btn-danger">TUTUP</a></td>
                    <td width="30%" align="center"><a href="lanjut.php?urutawal=<?php echo $urutawal?>" type="submit" class="btn btn-success">MULAI</a></td>
                    </tr>  
                    </table></form>
                    <?php }else {
                    ?>
                    <form><table width="90%" border="0">
                      <tr>
                    <td width="30%" align="left"><a href="tutup.php" type="submit" class="btn btn-danger">TUTUP</a></td>
                    <td width="30%" align="center"><a href="lanjut.php?urutawal=<?php echo $urutawal?>" type="submit" class="btn btn-success">SELANJUTNYA</a></td>
                    <td width="30%" align="right"><a href="istirahat.php?urutawal=<?php echo $urutawal?>" type="submit" class="btn btn-warning">ISTIRAHAT</a></td>
                    </tr>  
                    </table></form>
                    <?php } ?>
                </center>


    <?php } ?>

</body>
</html>