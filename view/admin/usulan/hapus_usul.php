<?php 

include '../../../config/koneksi.php';

$id_usul=$_POST['id_usul'];

$query=mysqli_query($koneksi," DELETE FROM usul WHERE id_usul='$id_usul'");

if($query){
    ?>
    <script type="text/javascript">
        alert("Hapus Berhasil");
        window.location='data_usulan.php';
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