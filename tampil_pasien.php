 <html>
<head>
    <link rel="icon" type="antrian_klinik/image/png" href="images/logoklinik2.png">
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

        ?>
           
             <div class="header"><center><b><font color="black" size="30px">APLIKASI ANTRIAN BEROBAT</font></b></h1></center></div>

            
        <center><img src="images/logoklinik.png" height="200" width="430" style="margin-top: 0px" class="rotate"></center>
        <center><font color="black" size="5.5px">Jalan Raya Loji Kecamatan Ciracap, Kabupaten Sukabumi, 43176</font></center>
    

            <div class="p">
                <br><br>
            <center><div class="header2"><br>
                <center>
                    <h3><font color="black" style="margin-bottom: 1px"><?php echo $tampil['keterangan']; ?></font></b></h3>
                </center><br>
                <center>
                    <b><font color="black" style="margin-bottom: 1px" size="40px"><?php echo $tampil['status']; ?></font></b><br><br><br>
                    <h3><font color="black" style="margin-bottom: 1px">NOMOR ANTRIAN YANG MASIH TERSEDIA <?php echo $tampil['nomor_tersedia']; ?> DAN SETERUSNYA</font></b></h3><br>
                </center>
            </div></center>
            <br><br>
             </div>

    <?php } ?>

</body>
</html>



