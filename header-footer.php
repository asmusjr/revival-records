	<div class="navbar navbar-inverse navbar-static-top navbar-custom" role="navigation">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a data-toggle="modal" data-target="#myModal" class="navbar-brand" href="#"><img id="navbar-image" src="img/logo.png" alt="Revival Records"></a>
		</div>
		
		<div id="top-nav" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Records <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="records.php">About our Records</a></li>
				<li><a href="record_catalog.php">View all Records</a></li>
				<li class="divider"></li>
				<li><a href="wishlist.php">Wishlist</a></li>
				<li><a href="request.php">Send Request</a></li>
				<li class="divider"></li>
				<li><a href="visit.php">Visit Us</a></li>
			  </ul>
			</li>
			</ul>
		</div>
	  </div>
	</div>

	<nav class="navbar navbar-fixed-bottom" role="navigation">
		<?php include 'music-player.php' ?>
		<footer>
			<div class="container">
				<p class="pull-right"><a href="visit.php">128 S. Barstow St &middot; Eau Claire</a></p>
				<p><a href="#">715-514-4202</a></p>
			</div><!-- /.container -->
		</footer>
	</nav>
	
	<div class="modal fade modal-fullscreen force-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-body">
			<?php include 'animation-intro.html' ?>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->