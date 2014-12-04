	<div class="navbar navbar-inverse navbar-static-top navbar-custom" role="navigation">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a data-toggle="modal" data-target="#animation-intro" class="navbar-brand" href="#"><img id="navbar-image" src="img/logo.png" alt="Revival Records"></a>
		</div>
		
		<div id="top-nav" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Records <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="record_catalog.php">Records Catalog</a></li>
				<li><a href="my_records.php">My Records</a></li>
			  </ul>
			</li>
		  </ul>
		</div>
	  </div>
	</div>

	<nav class="navbar navbar-fixed-bottom" role="navigation">
		<footer class="navbar-inverse">
			<div class="container">
				<p class="pull-right"><a href="contact.php">715-514-4202 &middot; 128 S. Barstow St &middot; Eau Claire</a></p>
				<p>
					<a href="https://www.facebook.com/pages/Revival-Records/111980655498485" target="_blank"><img src="img/facebook-icon.png" class="social-media-icon" alt="Like our Facebook Fan Page"></a>
					<a href="https://twitter.com/RevivalRcrds" target="_blank"><img src="img/twitter-icon.png" class="social-media-icon" alt="Follow us on Twitter"></a>
				</p>
			</div>
		</footer>
	</nav>
	
	<?php include 'animation-intro.html' ?>