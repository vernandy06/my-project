<?php 

include '../../../config/koneksi.php';

$username=$_POST['username'];
$nama=$_POST['nama_lengkap'];
$pass=$_POST['password'];
$level=$_POST['level'];

$query=mysqli_query($koneksi," INSERT INTO user VALUES('', '$username', '$nama', '$pass', '$level' )");
if($query){
    ?>
    <script type="text/javascript">
        alert("Tambah data berhasil");
        window.location='seting.php';
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