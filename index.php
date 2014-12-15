<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Revival Records - Eau Claire Records</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/master.css">
        
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </head>
    
    <body id="swirl">
		<?php include 'header-footer.php' ?>
        
		<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class="container">
			<div class="row">
		<?php
			$content_1 = "home/content-1.html";
			$file_1 = fopen($content_1, "r") or die("Unable to load content 1");
			$file_1_content = htmlspecialchars_decode(fread($file_1, filesize($content_1)));
		
			$content_2 = "home/content-2.html";
			$file_2 = fopen($content_2, "r") or die("Unable to load content 2");
			$file_2_content = htmlspecialchars_decode(fread($file_2, filesize($content_2)));
			
			$content_3 = "home/content-3.html";
			$file_3 = fopen($content_3, "r") or die("Unable to load content 2");
			$file_3_content = htmlspecialchars_decode(fread($file_3, filesize($content_3)));
		?>
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img src="img/digging at revival.jpg" alt="First slide" />
								<div class="container">
									<div class="carousel-caption">
										<h1>We've moved to a bigger store!</h1>
										<p>We are now located at 128 S. Barstow St.</p>
										<p><a class="btn btn-lg btn-danger" href="contact.php" role="button">Visit us</a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="img/revdif.png" alt="Second slide" />
								<div class="container">
									<div class="carousel-caption">
										<h1>Learn about our store</h1>
										<p>Head over to the about page to learn about Revival Records.</p>
										<p><a class="btn btn-lg btn-warning" href="about.php" role="button">Learn more</a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<img src="img/justin-vernon.jpg" alt="Third slide">
								<div class="container">
									<div class="carousel-caption">
										<h1>International Store Record Day</h1>
										<p>Mark your calendars!</p>
										<p>April 20, 2013</p>
										<p><a class="btn btn-lg btn-danger" href="record_catalog.php" role="button">Browse records</a></p>
									</div>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div>
			<div class="row text-center marketing main-content">
				<div class="col-md-4">
					<?php echo $file_1_content ?>
				</div>
				<div class="col-md-4">
					<?php echo $file_2_content ?>
				</div>
				<div class="col-md-4">
					<?php echo $file_3_content ?>
				</div>
			</div>
		</div>
    </body>
</html>