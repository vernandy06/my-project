<?php 

include '../../../../config/koneksi.php';

$id=$_POST['id_pemasukan'];
$tanggal=$_POST['tanggal'];
$keterangan=$_POST['keterangan'];
$jumlah=$_POST['jumlah'];

$query=mysqli_query($koneksi," UPDATE pemasukan SET tanggal='$tanggal', keterangan='$keterangan', jumlah='$jumlah'
WHERE id_pemasukan='$id'");

if($query){
    ?>
    <script type="text/javascript">
        alert("Update data berhasil");
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