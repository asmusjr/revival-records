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
		<div class="container">
			<div class="row">
				<div class="main-content col-md-10">
					<h2 class="content-large-header"><span class="text-muted">My</span> Records</h2>
					<p>Welcome to the records you have requested.</p>
					<p>To learn about how we get our records, see about ...</p>
					<p>To request records to pick up the store ... then go to ...</p>
					<hr/>
					<ul class="nav nav-pills text-center" role="tablist">
						<li role="presentation" class="active"><a href="#">Sort by Artist</a></li>
						<li role="presentation"><a href="#">Sort by Album</a></li>
					</ul>
				</div>
				<div class="col-md-2 text-center">
					<div class="row">
						<div class="col-xs-12">
							<p><a href="record_catalog.php"><img class="record-link" src="img/recordcatalogicon.jpg"/></a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p><a href="my_records.php"><img class="record-link-active" src="img/requestrecord.jpg"/></a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center">
					<ul class="pagination">
						<li class="active"><a href="#a">A</a></li>
						<li><a href="#b">B</a></li>
						<li><a href="#c">C</a></li>
						<li><a href="#d">D</a></li>
						<li><a href="#e">E</a></li>
						<li><a href="#f">F</a></li>
						<li><a href="#g">G</a></li>
						<li><a href="#h">H</a></li>
						<li><a href="#i">I</a></li>
						<li><a href="#j">J</a></li>
						<li><a href="#k">K</a></li>
						<li><a href="#l">L</a></li>
						<li><a href="#m">M</a></li>
						<li><a href="#n">N</a></li>
						<li><a href="#o">O</a></li>
						<li><a href="#p">P</a></li>
						<li><a href="#q">Q</a></li>
						<li><a href="#r">R</a></li>
						<li><a href="#s">S</a></li>
						<li><a href="#t">T</a></li>
						<li><a href="#u">U</a></li>
						<li><a href="#v">V</a></li>
						<li><a href="#w">W</a></li>
						<li><a href="#x">X</a></li>
						<li><a href="#y">Y</a></li>
						<li><a href="#z">Z</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 main-content">
					<ul class="records-list">
						<li class="record-item-0">
							<ul class="media-list">
								<a href="#" style="display:block">
									<li class="media add-record-box">
										<img src="img/record.png" width="50px">
										<p>REMOVE</p>
									</li>
								</a>
								<p>Artist</p>
								<p>Record Name</p>
								<p>Genre</p>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
    </body>
</html>