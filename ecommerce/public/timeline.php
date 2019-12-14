<?php require_once("auth.php");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="id=edge">
  <title>Halaman</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body text-center">
            <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo']?>"/>
            <h3><?php echo $_SESSION["users"]["nama"]?></h3>
            <p><?php echo $_SESSION["users"]["email"]?></p>
            <p><a href="index.php">Logout</a></p>
          </div>
        </div>
        <div class="col-md-8">
          <form action="" method="post"/>
          <div class="form-group">
            <textarea class="form-control" placeholder="apa yang kamu pikirkan ?"></textarea>
          </div>
        </form>
        </div>
      </div>
    </div>
  </body>
</html>
