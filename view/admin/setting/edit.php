<?php 

include '../../../config/koneksi.php';

$id=$_POST['id'];
$username=$_POST['username'];
$nama=$_POST['nama_lengkap'];
$password=$_POST['password'];
$level=$_POST['level'];

$query=mysqli_query($koneksi," UPDATE user SET username='$username', nama_lepngkap='$nama', password='$password', level='$level'
WHERE id='$id'");

if($query){
    ?>
    <script type="text/javascript">
        alert("Update data berhasil");
        window.location='seting.php';
    </script>
    <?php
}else{
    ?>
    <script type="text/javascript">
        alert("Cek Lagi Ada Yang Salah");
        window.location='seting.php';
    </script>
    <?php 
}

?>