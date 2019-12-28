<?php
include('config1.php');
include('auth.php');

if ($_POST['tambah']){
  // code...
$nama_admin = $_POST['nama_admin'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$fotobaru = date('foto').$foto;
$path = "img/".$fotobaru;

if(move_uploaded_file($tmp,$path)){
  $query = "INSERT INTO blog VALUES('".$nama_admin."','".$judul."','".$isi."','".$fotobaru."')";
  $sql = mysqli_query($db,$query);
  if($sql){
    header("Location:timeline.php");
  }
}else{
    echo "Maaf, Ada kesalahan";
    echo "<br><a href='form-input.php'>Kembali ke Form</a>";
  }
}
?>
