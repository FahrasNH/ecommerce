<?php
include('auth.php');
include('config1.php');
if(isset($_POST['tambah'])){
  $id = $_POST['id'];
  $nama_admin = $_POST['nama_admin'];
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $foto = $_POST['foto'];
  $sql = "UPDATE blog SET nama_admin='$nama_admin',judul='$judul',isi='$isi',foto='$foto' WHERE id=$id";
  $query = mysqli_query($db,$sql);
  if($query){
    header('Location:timeline.php');
  }else{
    die("Gagal Simpan Perubahan ");
  }
  }
  else {
    die("Akses Dilarang");
  }
?>
