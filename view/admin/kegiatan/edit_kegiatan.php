<?php 

include '../../../config/koneksi.php';

$id=$_POST['id_kegiatan'];
$tentang=$_POST['tentang'];
$tempat=$_POST['tempat'];
$waktu=$_POST['waktu'];

$query=mysqli_query($koneksi," UPDATE kegiatan SET tentang='$tentang', tempat='$tempat', waktu='$waktu'
WHERE id_kegiatan='$id'");

if($query){
    ?>
    <script type="text/javascript">
        alert("Update data berhasil");
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