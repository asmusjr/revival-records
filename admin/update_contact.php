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
						<h2 class="content-large-header">Edit <span class="text-muted">Contact</span></h2>
						<h4 class="text-muted">Welcome to the administrative tools for the contact page.</h4>
                    </div>
                    <hr />
					<?php	$store_hours_file = "../contact/store-hours.html";
							if ($_SERVER['REQUEST_METHOD'] === 'POST') {
								if (isset($_POST['btn-hours'])) {
									$file = fopen($store_hours_file, "w+"); 
									fwrite($file, $_POST['store-hours']);
									fclose($file);
									echo "<p class='text-center'><b>Update successful</b></p>";
								}
							} ?>
					<p class="text-center">You can edit the hours displayed on the page by typing desired changes into the box below.</p>					
						<form action="update_contact.php" id="update-hours" method="post" class="text-center">
							<p>Store Hours: 
								<textarea form="update-hours" type="text" rows="4" cols="50" name="store-hours"><?php include $store_hours_file ?></textarea>
							</p>
							<input class="btn btn-danger pull-right" name="btn-hours" type="submit" value="Submit Changes"/>
						</form>
				</div>
            </div>
		</div>
    </body>
</html>