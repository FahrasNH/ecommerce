<?php
require_once("config.php");

if(isset($_POST['register'])){
  $name = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
  $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $sql = "INSERT INTO users (nama, username, email, password)
          VALUES (:nama,:username,:email,:password)";
  $stmt = $db->prepare($sql);
  $params = array (
    ":nama" => $name,
    ":username" => $username,
    ":password" => $password,
    ":email" => $email
  );
  $saved = $stmt->execute($params);
  if($saved) header("Location: login.php");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Register</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <p>&larr; <a href="index.php">Home</a>
        <h4> Bergabunglah bersama ribuan orang lainnya </h4>
        <p> sudah punya akun ? <a href=login.php>login disini</a></p>
        <form action="" method="post">
          <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input class="form-control" type="text" name="nama" placeholder="Nama lengkap"/>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username"/>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Alamat Email"/>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password"/>
          </div>
          <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar"/>
        </form>
      </div>
      <div class="col-md-6">
        <img class="img img-responsive" src=""/>
      </div>
    </div>
  </div>
</body>
</html>
