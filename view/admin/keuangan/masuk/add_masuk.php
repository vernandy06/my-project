<?php 

include '../../../../config/koneksi.php';

$waktu=$_POST['waktu'];
$ket=$_POST['keterangan'];
$jumlah=$_POST['jumlah'];


$query=mysqli_query($koneksi," INSERT INTO pemasukan VALUES('', '$waktu', '$ket', '$jumlah' )");
if($query){
    ?>
    <script type="text/javascript">
        alert("Tambah data berhasil");
        window.location='pemasukan.php';
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Cek Lagi Ada Yang Salah");
    </script>
    <?php 
}

?>