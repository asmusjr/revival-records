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
    	<script src="js/jQuery.jPlayer.2.7.0/jquery.jplayer.min.js"></script>
    </head>
    
    <body>
		<?php include 'header-footer.php' ?>
        
		<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class="container">
			<div class="row">
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
									<p><a class="btn btn-lg btn-danger" href="visit.php" role="button">Visit us</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/revdif.png" alt="Second slide" />
							<div class="container">
								<div class="carousel-caption">
									<h1>Promotional Material</h1>
									<p>The various promotional information can go on this part.</p>
									<p><a class="btn btn-lg btn-warning" href="#" role="button">Learn more</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/RSDvector2_20131.jpg" alt="Third slide">
							<div class="container">
								<div class="carousel-caption">
									<h1>International Record Day</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-danger" href="#" role="button">Browse gallery</a></p>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
			<div class="row text-center marketing main-content">
				<div class="col-md-4">
					<img class="img-circle" src="img/P1050121.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<h2><?php include 'index/title-1.txt' ?></h2>
					<p>While we specialize in rock and roll records, we also carry a fantastic selection of new and used blues records, jazz records, soundtracks, reggae records, country records, hip hop and much more. We have a unique variety of LPs and 45s, 12" singles, 7" singles, and we also sell CDs. In addition to music we have record accessories, audio equipment, and apparel. Bottom line, there is something for everyone at Revival Records!</p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<img class="img-circle" src="img/P1050105.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<h2><?php include 'index/title-2.txt'?></h2>
					<p>Welcome to Eau Claire's number one record store! We are conveniently located in Downtown Eau Claire on the corner of S. Barstow and Gray St. We have a vast selection of countless records spanning across all genres. Our collection is made up of new and used records and we also buy records right here in the store. We want each person who comes to dig through our records to discover something new or something treasured.  No matter what the customer craves, the vast and varied collection at Revival Records can please the pickiest listeners.</p>
					<p><a class="btn btn-default" href="about.php" role="button">View details &raquo;</a></p>
				</div><!-- /.col-lg-4 -->
				<div class="col-md-4">
					<img class="img-circle" src="img/P1050061.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<h2><?php include 'index/title-3.txt'?></h2>
					<p><?php include 'index/content-3.html'?></p>
				</div>
			</div>
		</div>
    </body>
</html>