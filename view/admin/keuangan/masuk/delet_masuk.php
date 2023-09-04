<?php 

include '../../../../config/koneksi.php';

$id=$_POST['id_pemasukan'];

$query=mysqli_query($koneksi," DELETE FROM pemasukan WHERE id_pemasukan='$id'");

if($query){
    ?>
    <script type="text/javascript">
        alert("Hapus Berhasil");
        window.location='pemasukan.php';
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