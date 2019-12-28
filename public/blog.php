<!DOCTYPE html>
<html lang="en">
  <head>
    <section id="mu-hero">
    <?php
    include('header.php');
    require_once('config1.php');?>
</section>
	</head>

	<!-- Start main content -->

		<!-- Start Book Overview -->
    <section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">
							<div class="mu-heading-area">
							<h2 class="mu-heading-title">Hot News Blog</h2>
								<span class="mu-header-dot"></span>
              </div>
							<!-- Start Author Content -->
							<div class="mu-author-content">
								<div class="row">
									<div class="col-md-6">
										<div class="mu-author-image">  <?php
                     $sql = "SELECT foto FROM blog";
                     $query = mysqli_query($db,$sql);
                     while ($blog = mysqli_fetch_array($query)){
                       echo "<br><img src='img/".$blog['foto']."'></br>";
										}?>
										</div>
									</div>
									 <div class="col-md-6">
										<div class="mu-author-info">

                      <?php
                     $sql = "SELECT * FROM blog";
                     $query = mysqli_query($db,$sql);
                     while ($blog = mysqli_fetch_array($query)){
                       echo "<h3>".$blog['judul']."</h3>";
                       echo "<p>".substr($blog['isi'],0,350)."</p>";
                       echo "<p><i class='fa fa-twitter'><a href='lengkap.php?id=".$blog['id']."'>Baca Selengkapnya...</a></p></i>";
                       echo "<br>"."</br>";
										}?>
											<div class="mu-author-social">
											</div>
										</div>
									</div>
								</div>
							</div>
              <?php
              $perPage = 3;
              $page = isset($_GET['halaman']) ? (int)$_GET['halaman']:1;
              $start = ($page > 1)?($page*$perPage)-$perPage:0;
              $query = "SELECT * FROM blog LIMIT $start,$perPage";
              $result = mysqli_query($db,"SELECT * FROM blog");
              $total = mysqli_num_rows($result);
              $pages = ceil($total/$perPage);
            ?>
              <div class="text-center">
        <ul class="pagination">
            <?php
            for($i=1;$i<=$pages;$i++) {?>
            <a href="blog.php?halaman=<?php echo $i ?>">
            </a>
          <?php }?>
        </div>
        <?php
          include('footer.php');?>
        </ul>
    </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Book Overview -->

		<!-- Start Video Review -->
		<section id="mu-video-review">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-review-area">
							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Cek Video Kita</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>
							<!-- Start Video Review Content -->
							<div class="mu-video-review-content">
								<iframe class="mu-video-iframe" width="100%" height="480" src="https://www.youtube.com/embed/T4ySAlBt2Ug" frameborder="0" allowfullscreen></iframe>
							</div>
							<!-- End Video Review Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
    <?php include('footer.php')?>
  </body>
</html>
