<?php 

include '../../../../config/koneksi.php';

$id=$_POST['id_pengeluaran'];

$query=mysqli_query($koneksi," DELETE FROM pengeluaran WHERE id_pengeluaran='$id'");

if($query){
    ?>
    <script type="text/javascript">
        alert("Hapus Berhasil");
        window.location='pengeluaran.php';
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