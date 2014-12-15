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
		<script src="../js/bootstrap-growl.min.js"></script>
		<script src="../ckeditor/ckeditor.js"></script>
	</head>
	<body id="admin">
		<?php include 'header-footer.php' ?>
		<div class="container">
			<div class="row main-content">
				<div class=" col-md-12">
                	<div class="text-center">
						<h2 class="content-large-header">Edit <span class="text-muted">About</span></h2>
						<h4 class="text-muted">Welcome to the administrative tools for the about page.</h4>
                    </div>
                    <hr />
					<?php	$about_store_path = "../about/about-store.html";
							$about_records_path = "../about/about-records.html";
							
					if ($_SERVER['REQUEST_METHOD'] === 'POST') {
						if (isset($_POST['btn-about'])) {
							$file = fopen($about_store_path, "w+"); 
							fwrite($file, htmlspecialchars($_POST['about-store'], ENT_QUOTES, "UTF-8"));
							fclose($file);
							
							$file = fopen($about_records_path, "w+"); 
							fwrite($file, htmlspecialchars($_POST['about-records'], ENT_QUOTES, "UTF-8"));
							fclose($file);
						?>
						<script>
							$.growl("About updated successfully");
						</script>
						<?php }
					} ?>
					<p class="text-center">You can edit the text displayed on the about page by typing desired changes into the box below for one or both sections.</p>
                    <div class="row">
                    	<form action="update_about.php" id="update-about" method="post">
                            <div class="col-xs-12 col-md-6 text-center">
                                <h2>About the Store</h2>
								<textarea form="update-about" class="ckeditor" type="text" name="about-store"><?php include $about_store_path ?></textarea>
                            </div>
                            <div class="col-xs-12 col-md-6 text-center">
                            	<h2>About the Records</h2>
								<textarea form="update-about" class="ckeditor" type="text" name="about-records"><?php include $about_records_path ?></textarea>
                            </div>
							<div class="col-xs-12 top-15-margin">
								<input class="btn btn-danger pull-right" name="btn-about" type="submit" value="Submit Changes"/>
							</div>
						</form>
                    </div>
				</div>
            </div>
		</div>
    </body>
</html>