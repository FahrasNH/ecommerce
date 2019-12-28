<?php
include('config1.php');
include('auth.php');

if(isset($_POST['tambah'])){

$nama_admin = $_POST['nama_admin'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
/*$fotobaru = date('foto').$foto;*/
$path = "img/".$fotobaru;
$terupload = move_uploaded_file($tmp,$path.$foto);
$sql = " INSERT INTO blog(nama_admin, judul, isi, foto) VALUE ('$nama_admin','$judul','$isi','$foto')";
$query = mysqli_query($db,$sql);
if($query){
    echo "<script>alert('Data Berhasil di Tambahkan');</script>";
    header("Location:timeline.php");
  }
else{
    echo "<script>alert('Maaf, Ada kesalahan');</script>";
}
}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Register</title>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
        <h4> Input Data Blog</h4>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-group">
              <label for="name">Nama Admin</label>
              <input class="form-control" type="text" name="nama_admin" placeholder="Judul BLOG"/>
            </div>
            <label for="name">Judul</label>
            <input class="form-control" type="text" name="judul" placeholder="Judul BLOG"/>
          </div>
          <div class="form-group">
            <label for="username">Isi BLOG</label>
            <textarea class="ckeditor" name="isi" placeholder="Isi BLOG"></textarea>
          </div>
          <!-- <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="foto" placeholder="Alamat Email"/>
          </div> -->
          <div class="form-group">
            <label for="foto">Upload Foto</label>
            <input type="file" name="foto"/>
          </div>
          <input type="submit" class="btn btn-success btn-block" name="tambah" value="Tambahkan"/>
        </form>
      </div>
      <div class="col-md-6">
        <img class="img img-responsive" src=""/>
      </div>
    </div>
  </div>
</body>
</html>
