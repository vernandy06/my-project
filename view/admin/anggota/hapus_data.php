<?php 

include '../../../config/koneksi.php';

$id=$_POST['id'];

$query=mysqli_query($koneksi," DELETE FROM anggota WHERE id='$id'");

if($query){
    ?>
    <script type="text/javascript">
        alert("Hapus Berhasil");
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