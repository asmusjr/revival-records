<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin Controls - Revival Records</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="../css/master.css">

        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="../js/vendor/jquery-1.10.2.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/admin.js"></script>
    	<script src="../js/jQuery.jPlayer.2.7.0/jquery.jplayer.min.js"></script>
	</head>
	<body id="admin">
		<?php include 'header-footer.php' ?>
		<div class="container">
			<div class="row main-content">
				<div class=" col-md-12">
                	<div class="text-center">
						<h2 class="content-large-header">Welcome <span class="text-muted">Admin</span></h2>
						<h4 class="text-muted">Welcome to the administrative tools for the Revival Records website.</h4>
                    </div>
                    <hr />
					<p class="text-center">The administrative tool allows the user to update text and records for the Revival Records website. Get started by choosing a page below or on the menu bar.</p>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <div class="round-button">
                                <div class="round-button-circle">
                                    <a href="update_home.php" class="round-button">Edit Home</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="round-button">
                                <div class="round-button-circle">
                                    <a href="update_about.php" class="round-button">Edit About</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="round-button">
                                <div class="round-button-circle">
                                    <a href="update_contact.php" class="round-button">Edit Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="round-button">
                                <div class="round-button-circle">
                                    <a href="record_catalog.php" class="round-button">Edit Records</a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
		</div>
    </body>
</html>