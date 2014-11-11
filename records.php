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
	</head>
	<?php
		function postRecordRequest(){
			$servername = "68.178.217.19";
			$username = "revivalrecordsdb";
			$password = "RevivalRecords123!";
			//$dbname = "revivalrecordsdb";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "INSERT INTO Record_Request (request_email)
			VALUES ('GOOCH')";
			if (mysqli_query($conn, $sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
		}
	?> 
	<body>
		<?php include 'header-footer.php' ?>
		
		<div class="container main-content">
			<div class="row">
				<div class="col-md-6">
					<div class = "polaroid_imgs">
						<a title=""><img height="150" src="img/revdif.png" alt="img1" /></a>
						<a title=""><img height="150" src="img/P1050121.jpg" alt="img2" /></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-xs-12">
							<p>Here at Revival Records, we pride ourselves on having a wide variety of new and used vinyl to choose from. Although we cary a little bit of everything, our largest genres to choose from are pop and rock. Don't get discouraged if rock isn't your thing, we have a good sized collection of jazz, blues, reggae, folk, classical, soundtracks, country, kids and world music too. Most of the stacks at Revival Records are made up of used vinyl but we have a sizable stock of new vinyl and it's growing every week! Ask the staff about their favorite albums, new or old if you're looking to try something new. Oh yeah, and we've got CDs too!</p>
							<p>A big way we build our collection of used vinyl and CDs is from people bringing in music to sell or trade.</p>
							<p>In addition to a great selection of vinyl, you can find all sorts of record accessories at Revival Records. We have cleaning supplies, protective inner and outer sleeves and frames for displaying your favorite records. And for those tough cleaning jobs we offer a professional cleaning service here at the store.</p>
							<p>Revival Records has an ever changing selection of home audio equipment. We have new and used turntables, receivers, speakers and pre-amps for sale. We also purchase used equipment for cash or trade if you  are looking to upgrade your stereo. </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 pointer" data-toggle="modal" data-target="#myModal" style="width:100px;height:100px;background-image:url(img/requestrecord.jpg);margin-right:25%;margin-left:28%;">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pointer" style="width:100px;height:100px;background-image:url(img/recordcatalogicon.jpg);">
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Request a Record</h4>
			  </div>
			  <div class="modal-body">
				<form action="records.php" method="postRecordRequest">
					<div class="form-group">
						<label for="inputName">Name</label>
						<input type="name" class="form-control" id="inputName" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" class="form-control" id="inputEmail" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="inputRecord">Record</label>
						<input type="record" class="form-control" id="inputRecord" placeholder="Record">
					</div>
					<div class="form-group">
						<label for="inputPhone">Phone</label>
						<input type="phone" class="form-control" id="inputPhone" placeholder="Phone">
					</div>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-lg" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-lg btn-primary">Submit Request</button>
			  </div>
			</div>
		  </div>
		</div>
		
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>