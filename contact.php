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
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>
			function init_map() {
				var var_location = new google.maps.LatLng(44.8119074,-91.5003962);
				var var_mapoptions = {
				  center: var_location,
				  zoom: 14
				};
				var var_marker = new google.maps.Marker({position: var_location,map: var_map,title:"Revival Records"});
				var var_map = new google.maps.Map(document.getElementById("map-container"),var_mapoptions);
				var_marker.setMap(var_map);	
			  }
			  google.maps.event.addDomListener(window, 'load', init_map);
		</script>
    </head>
	<body>
		<?php include 'header-footer.php' ?>
		<div class="container">
			<div class="row">
				<div class="featurette">
					<div class="col-md-7 main-content">
						<h2>Contact <span class="text-muted">Revival Records</span></h2>
						<p class="lead">Telephone: 715-514-4202</p>
						<p class="lead">Address: 128 S. Barstow St</p>
						<p class="lead">Eau Claire, WI 54701</p>
						<p class="lead">Store Hours:</p>
						<p class="lead">Open Monday thru Saturday</p>
						<p class="lead">11AM -7PM. Closed Sundays</p>
						<p class="lead">Owner: Billy Siegel</p>
						<p class="lead">Email: billy@revivalrecords.co</p>
					</div>
					<div class="col-md-5">
						<div class = "polaroid_imgs">
							<a title="Billy Siegel"><img class="featurette-image img-resposive" height = "400" src="img/billy_siegel.jpg" alt="The store owner, Billy Siegel"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
			  <div id="map-outer" class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
				  <div id="address" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 rowTextCentered">
					<h2>Our Location</h2>
					<address>
					<strong>Revival Records</strong><br/>
						128 South Barstow Street<br/>
						Eau Claire, Wisconsin<br/>
						54701<br/>
						<abbr>Phone:</abbr> 715-514-4202
				   </address>
				  </div>
				<div id="map-container" class="col-lg-8 col-md-8 col-sm-12 col-xs-12"></div>
			  </div><!-- /map-outer -->
			  
			  <div class="col-lg-4 col-lg-offset-1 col-md-4 col-sm-12 col-xs-12 rowTextCentered main-content">
					<h2>Store Hours</h2>
					Monday: 11:00AM - 7:00PM<br/>
					Tuesday: 11:00AM - 7:00PM<br/>
					Wednesday: 11:00AM - 7:00PM<br/>
					Thursday: 11:00AM - 7:00PM<br/>
					Friday: 11:00AM - 7:00PM<br/>
					Saturday: 11:00AM - 7:00PM<br/>
					Sunday: closed<br/>
			  </div>
		  </div> <!-- /row -->
		</div>
    </body>
</html>