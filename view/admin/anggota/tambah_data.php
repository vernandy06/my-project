<?php 

include '../../../config/koneksi.php';

$nama=$_POST['nama'];
$email=$_POST['email'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$jabatan=$_POST['jabatan'];

$query=mysqli_query($koneksi," INSERT INTO anggota VALUES('', '$nama', '$email', '$jenis_kelamin', '$jabatan' )");
if($query){
    ?>
    <script type="text/javascript">
        alert("Tambah data berhasil");
        window.location='data_anggota.php';
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