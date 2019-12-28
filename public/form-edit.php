<?php
include("config1.php");
include("auth.php");

if(!isset($_GET['id'])){
  header('Location:timeline.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM blog WHERE id=$id";
$query = mysqli_query($db,$sql);
$blog = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) < 1 ){
  die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Register</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
        <h4> Edit Data Blog</h4>
        <form action="proses-edit.php" method="post">
          <div class="form-group">
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $blog['id']?>"/>
              <label for="name">Nama Admin</label>
              <input class="form-control" type="text" name="nama_admin" placeholder="Judul BLOG" value="<?php echo $blog['nama_admin']?>"/>
            </div>
            <label for="name">Judul</label>
            <input class="form-control" type="text" name="judul" placeholder="Judul BLOG" value="<?php echo $blog['judul']?>"/>
          </div>
          <div class="form-group">
            <label for="username">Isi BLOG</label>
            <textarea class="form-control" name="isi" placeholder="Isi BLOG"><?php echo $blog['isi']?></textarea>
          </div>
          <!-- <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="foto" placeholder="Alamat Email"/>
          </div> -->
          <div class="form-group">
            <label for="foto">Upload Foto</label>
            <form action"upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="foto"/>
          </div>
          <input type="submit" class="btn btn-success btn-block" name="tambah" value="Tambahkan"/>
        </form>
