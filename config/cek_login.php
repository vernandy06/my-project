<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
 $data = mysqli_fetch_assoc($login);

 if($data['level']=="Admin"){
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "Admin";
  header("location:../view/admin/admin.php");

 } else if ($data['level']=="Bendahara"){
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "Bendahara";
  header("location:../view/bendahara/bendahara.php");

 } else if ($data['level']=="Anggota"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "Anggota";
    header("location:../view/anggota/userview.php");

} else {
    header("location:../index.php?pesan=gagal");
   } 
   }else{
   header("location:../index.php?pesan=gagal");
   }

?>



?>