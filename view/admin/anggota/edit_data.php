<?php 

include '../../../config/koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$jabatan=$_POST['jabatan'];

$query=mysqli_query($koneksi," UPDATE anggota SET nama='$nama', email='$email', jenis_kelamin='$jenis_kelamin', jabatan='$jabatan'
WHERE id ='$id'");

if($query){
    ?>
    <script type="text/javascript">
        alert("Update data berhasil");
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