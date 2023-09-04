<?php 

include '../../../config/koneksi.php';

$id_kegiatan=$_POST['id_kegiatan'];

$query=mysqli_query($koneksi," DELETE FROM kegiatan WHERE id_kegiatan='$id_kegiatan'");

if($query){
    ?>
    <script type="text/javascript">
        alert("Hapus Berhasil");
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