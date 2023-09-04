<?php 

include '../../config/koneksi.php';

$nama=$_POST['nama'];
$isi=$_POST['isi'];


$query=mysqli_query($koneksi," INSERT INTO usul VALUES('', '$nama', '$isi' )");
if($query){
    ?>
    <script type="text/javascript">
        alert("Tambah data berhasil");
        window.location='kusul.php';
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