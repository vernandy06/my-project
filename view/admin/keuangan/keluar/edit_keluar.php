<?php 

include '../../../../config/koneksi.php';

$id=$_POST['id_pengeluaran'];
$tanggal=$_POST['tanggal'];
$keterangan=$_POST['keterangan'];
$jumlah=$_POST['jumlah'];

$query=mysqli_query($koneksi," UPDATE pengeluaran SET tanggal='$tanggal', keterangan='$keterangan', jumlah='$jumlah'
WHERE id_pengeluaran='$id'");

if($query){
    ?>
    <script type="text/javascript">
        alert("Update data berhasil");
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