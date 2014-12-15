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
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/main.js"></script>
		<script src="js/contact.js"></script>
    </head>
	<body id="swirl">
		<?php include 'header-footer.php';
				$contact = "contact/contact.html";
				$file = fopen($contact, "r") or die("Unable to load content");
				$file_content = htmlspecialchars_decode(fread($file, filesize($contact))); ?>
		<div class="container">
			<div class="row main-content" id="left-side">
				<div class="col-md-4">
					<h2 class="content-large-header">Contact <span class="text-muted">Revival Records</span></h2>
					<h4 class="text-muted">Explore our record collection today.</h4>
					<hr/>
					<?php echo $file_content ?>
				</div>
				<div class="col-md-8" id="map-container"></div>
			</div>
		</div>
    </body>
</html>