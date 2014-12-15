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
		<script src="../ckeditor/ckeditor.js"></script>
		<script src="../js/bootstrap-growl.min.js"></script>
        <script src="../js/admin.js"></script>
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
					<?php	$store_hours_path = "../contact/contact.html";
							if ($_SERVER['REQUEST_METHOD'] === 'POST') {
								if (isset($_POST['btn-hours'])) {
									$file = fopen($store_hours_path, "w+"); 
									fwrite($file, htmlspecialchars($_POST['store-hours'], ENT_QUOTES, "UTF-8"));
									fclose($file);
								?>
							<script>
								$.growl("Contact updated successfully");
							</script>
							<?php }
						} ?>
					<p class="text-center">You can edit the contact information displayed on the page by typing desired changes into the box below.</p>					
						<form action="update_contact.php" id="update-hours" method="post" class="text-center">
							<h2>Contact Information</h2>
							<textarea form="update-hours" class="ckeditor" type="text" name="store-hours"><?php include $store_hours_path ?></textarea>
							<input class="btn btn-danger top-15-margin pull-right" name="btn-hours" type="submit" value="Submit Changes"/>
						</form>
				</div>
            </div>
		</div>
    </body>
</html>