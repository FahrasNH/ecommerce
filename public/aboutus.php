<!DOCTYPE html>
<html lang="en">
 <head>
    <section id="mu-hero">
		<?php include('header.php');
		require_once('config1.php');
		?>
		<link href="./assets/css/me.css" rel="stylesheet">
	</section>
  </head>
  <body>
		<!-- Start Author -->
		<section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">
							<div class="mu-heading-area">
								<h2 class="mu-heading-title">About The Author</h2>
								<span class="mu-header-dot"></span>
							</div>
							<!-- Start Author Content -->
							<?php
                    				$sql = "SELECT a.foto, a.biodata, a.link, b.facebook, b.instagram, a.nama FROM author a, social b where a.id = b.id";
                    				$query = mysqli_query($db,$sql);
                     				while ($biodata = mysqli_fetch_array($query)){
									echo "<section class='content-row'>";
									echo "<div class='mu-author-content'>";
									echo "<div class='row'>";
									echo "<div class='col-md-6'>";
									echo "<div class='mu-author-image'>";
                       				echo "<img id='imagesaya' src='".$biodata['0']."'>";	
									echo "</div>";
									echo "</div>";
									echo "<div class='col-md-6'>";
									echo "<div class='mu-author-info'>";
									echo "<h3>".$biodata['5']."</h3>";
									echo "<p>".$biodata['1']."</p>";
									echo "<div class='mu-author-social'>";
									echo "<a href='".$biodata['3']."'><i class='fa fa-facebook'></i></a>";
									echo "<a href='".$biodata['4']."'><i class='fa fa-instagram'></i></a>";
									echo "</div>";
									echo "<a href='".$biodata['2']."' class='button' style='vertical-align:middle'>Cari Tahu Tentang Saya !</a>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
									echo "</section>";}
							?>
							<!-- End Author Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Author -->
 <!-- jQuery library -->
 <?php include('footer.php');
	?>
  </body>
</html>