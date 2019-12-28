<!DOCTYPE html>
<html lang="en">
  <head>
    <section id="mu-hero">
    <?php
    include('header.php');
    require_once('config1.php');?>
</section>
	</head>
<body>
  <section id="mu-author">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- <div class="mu-author-area"> -->
            <div class="mu-heading-area">
            <h2 class="mu-heading-title">

              <?php
             $id = abs(intval($_GET['id']));
             $query = mysqli_query($db,"SELECT * FROM blog WHERE id='$id'LIMIT 1");
             while ($blog = mysqli_fetch_array($query)){
               echo "<h2>".$blog['judul']."</h2>";
               echo "<span class='mu-header-dot'>"."</span>";
            }
            ?>
          </div></h2>
          


            <div class="col-md-6">
                <?php
               $id = abs(intval($_GET['id']));
               $query = mysqli_query($db,"SELECT * FROM blog WHERE id='$id'LIMIT 1");
               while ($blog = mysqli_fetch_array($query)){
                 echo "<p><img src='img/".$blog['foto']."'></p>";
               }
                  ?>
            </div>
            <?php
           $id = abs(intval($_GET['id']));
           $query = mysqli_query($db,"SELECT * FROM blog WHERE id='$id'LIMIT 1");
           while ($blog = mysqli_fetch_array($query)){
             echo "<p>".$blog['isi']."</p>";
          }
          ?>

</div>
</div>
</div>
</section>
</body>
