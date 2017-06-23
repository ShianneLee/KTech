<!DOCTYPE html>
<html lang="en">
	<head>
		<title>K-Tech Development Inc.</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div id="container">
			<!-- Navbar -->
			<?php include("includes/header.php");?>

			<!-- Carousel -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false"><!--data-interval="6000"-->

				<!--Wrapper for slides-->
				<div class="carousel-inner" role="listbox">
					<?php
					$directory = "carousel-images";
					$images = array();
					$count = 0;

					if($handle = opendir($directory)){
						while (false !== ($file = readdir($handle))) {
							if(preg_match("/\.jpg$/", $file)){
								$images[] = $file;
								$count += 1;
							}
						}
						closedir($handle);
					}
					$i = true;
					foreach ($images as $image) {
						if ($i == true) {
							echo '<div class="item active">';
							$i = false;
						}else{
							echo '<div class="item">';
						}
							
							echo '<img src="'.$directory.'/'.$image.'" alt="image" />
							  </div>';
					}
					?>
				</div><!--End of Wrapper for slides-->
				<!--Indicators-->
				<ol class="carousel-indicators">
					<?php
					$i = true;
						for ($c=0; $c <= $count ; $c++) { 
							if ($i == true) {
								echo '<li data-target="#myCarousel" data-slide-to="'.$c.'" class="active"></li>';
								$i = false;
							}else{
								echo '<li data-target="#myCarousel" data-slide-to="'.$c.'"></li>';
							}
						}
					?>
					<!-- <li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li> -->
				</ol>
				<!--Left and right controls-->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div><!--End of Carousel-->
			<div class="container">
				<div class="row">
					<div class="col-lg-6" style="background-color:lavender;">
						<p>
							first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. first section. 
						</p>
					</div>
					<div class="col-lg-6" style="background-color:lavenderblush;">
						<p>
							second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. second section. 
						</p>
					</div>
					<!-- <div class="col-lg-4" style="background-color:lavender;">
						<p>
							third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. third section. 
						</p>
					</div> -->
				</div>
			</div>
			<!-- Footer -->
			<?php include("includes/footer.php");?>
		</div>
	</body>
</html>