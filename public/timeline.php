<?php
require_once("auth.php");
require_once("config1.php");

$per_page = 3;
$page = 1;

if(isset($_GET['link'])){
  $page=$_GET['link'];
  $page=($page>1)?$page:1;
}
  $query = mysqli_num_rows(mysqli_query($db,"SELECT * FROM blog"));
  $total_page = ceil($query/$per_page);
  $offset = ($page-1)*$per_page;
  $query2 = mysqli_query($db,"SELECT * FROM blog LIMIT $per_page OFFSET $offset");
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Mercu Ecommerce</title>

      <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>

      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

      <link href="assets/css/bootstrap.min.css" rel="stylesheet">

      <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

      <link href="./assets/css/app.css" rel="stylesheet">
  	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    	<!-- Start Header -->
      <section id="mu-">
  	<header id="mu-header" class="" role="banner">
  		<div class="container">
  			<nav class="navbar navbar-default mu-navbar">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- Text Logo -->
              <a class="navbar-brand"><i class="fa fa-book" aria-hidden="true"></i> Mercu Ecommerce</a>
              <!-- Image Logo -->
              <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav mu-menu navbar-right">
                <li><h3><?php echo $_SESSION["users"]["nama"]?></h3>
                  <a href="logout.php">LOGOUT</a>
            </li>
                </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
  			</nav>
  		</div>
  	</header>

  <title>Halaman</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<!-- <body class="bg-light"> -->
  <div class="container mt-5">
    <div class="row">
    <div class="mu-pricing-content">
      <div class="row">
        <!-- Pricing Single Content -->
        <!-- <div class="col-sm-6 col-md-4"> -->
          <div class="mu-pricing-single">
            <div class="mu-pricing-single-head">
          </div>
            <div class="mu-pricing-single-footer">
              <h3>Data Blog Buku Mercubuana</h3>
              <p>
            </div></p>
        <div class="container">
      <table class="table">
      <thead>
          <tr class="success">
              <th>ID</th>
              <th>JUDUL</th>
              <th>ISI</th>
              <th>FOTO</th>
              <th>TINDAKAN</th>
              <th>NAMAADMIN</th>
          </tr>
      </thead>
        <?php
       $sql = "SELECT * FROM blog";
       $query = mysqli_query($db,$sql);
       while ($blog = mysqli_fetch_array($query)){
         echo "<tr>";
         echo "<td>".$blog['id']."</td>";
         echo "<td>".$blog['judul']."</td>";
         echo "<td>".substr($blog['isi'],0,200)."</td>";
         echo "<td>".$blog['foto']."</td>";
         echo "<td>";
         echo "<a href='form-edit.php?id=".$blog['id']."'>Edit</a>|";
         echo "<a href='hapus-form.php?id=".$blog['id']."'>Hapus</a>";
          echo "<td>".$blog['nama_admin']."</td>";
         echo "</td>";
       echo "</tr>";
           }
       ?>
     </tr>
     </th>
   </table>
          </div>
        </div>
      </div>
    </div>
    <a href="form-input.php" class="mu-order-btn">Tambah Data</a>
  </div>
 </div>
        </div>
        <div class="col-md-8">
          <form action="" method="post"/>
          <div class="form-group">
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
