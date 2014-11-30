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
					<div class="col-md-12 main-content">
                    	<div class="col-md-4">
                            <h2 class="content-large-header">Contact <span class="text-muted">Revival Records</span></h2>
                            <h4 class="text-muted">Explore our record collection today.</h4>
                           	<br />
                            <h4 class="text-muted no-margin">Call us</h4>
                            <span class="lead small-text-muted">715-514-4202</span>
                            <h4 class="text-muted no-margin">Email us</h4>
                            <span class="lead small-text-muted">billy@revivalrecords.co</span>
                            <h4 class="text-muted no-margin">Visit us</h4>
                            <span class="lead small-text-muted">
                            						128 S. Barstow St.<br/>
                                                    Eau Claire, Wisconsin<br/>
                                                    54701<br/></span>
                            <br/>
                            <span class="lead small-text-muted">Open Monday through Saturday <br/> 11AM - 7PM.<br/>
                                            				Closed Sundays.</span>
                        </div>
                       	<div id="map-container" class="col-lg-8 col-md-8 col-sm-12 col-xs-12"></div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>