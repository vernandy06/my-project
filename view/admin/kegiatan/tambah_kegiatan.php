<?php 

include '../../../config/koneksi.php';

$tentang=$_POST['tentang'];
$tempat=$_POST['tempat'];
$waktu=$_POST['waktu'];

$query=mysqli_query($koneksi," INSERT INTO kegiatan VALUES('', '$tentang', '$tempat', '$waktu' )");
if($query){
    ?>
    <script type="text/javascript">
        alert("Tambah data berhasil");
        window.location='data_kegiatan.php';
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