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
		<script src="../ckeditor/ckeditor.js"></script>
    </head>
	<body id="admin">
		<?php include 'header-footer.php' ?>	
		<div class="container">
			<div class="row main-content">
				<div class=" col-md-12">
                	<div class="text-center">
						<h2 class="content-large-header">Edit <span class="text-muted">Home</span></h2>
						<h4 class="text-muted">Welcome to the administrative tools for the home page.</h4>
                    </div>
                    <hr />
					<?php	$title_1_path = "../home/title-1.txt";
							$title_2_path = "../home/title-2.txt";
							$title_3_path = "../home/title-3.txt";
							$content_1_path = "../home/content-1.html";
							$content_2_path = "../home/content-2.html";
							$content_3_path = "../home/content-3.html";
							
							if ($_SERVER['REQUEST_METHOD'] === 'POST') {
								if (isset($_POST['btn-home'])) {									
									$content_1_file = fopen($content_1_path, "w+"); 
									fwrite($content_1_file, htmlspecialchars($_POST['content-1'], ENT_QUOTES, "UTF-8"));
									fclose($content_1_file);
									
									$content_2_file = fopen($content_2_path, "w+"); 
									fwrite($content_2_file, htmlspecialchars($_POST['content-2'], ENT_QUOTES, "UTF-8"));
									fclose($content_2_file);

									$content_3_file = fopen($content_3_path, "w+"); 
									fwrite($content_3_file, htmlspecialchars($_POST['content-3'], ENT_QUOTES, "UTF-8"));
									fclose($content_3_file);
									
									echo "<p class='text-center'><b>Update successful</b></p>";
								}
							} ?>
							
					<p class="text-center">
						You can edit the text displayed on the three main sections of the about page.<br/>
						Sections are listed from left to right.<br/>
						To update, type desired changes into the box below for any or all of the sections.
					</p>
                    <div class="row">
						<form action="update_home.php" id="update-home" method="post">
							<div class="col-xs-12 col-lg-4 text-center top-15-margin">
								<h2>Content 1</h2>
								<textarea form="update-home" class="ckeditor" type="text" name="content-1"><?php include $content_1_path ?></textarea>
							</div>
							<div class="col-xs-12 col-lg-4 text-center top-15-margin">
								<h2>Content 2</h2>
								<textarea form="update-home" class="ckeditor" type="text" name="content-2"><?php include $content_2_path ?></textarea>
							</div>
							<div class="col-xs-12 col-lg-4 text-center top-15-margin">
								<h2>Content 3</h2>
								<textarea form="update-home" class="ckeditor" type="text" name="content-3"><?php include $content_3_path ?></textarea>
							</div>
							<div class="col-xs-12 col-lg-12 top-15-margin">
								<input class="btn btn-danger pull-right" name="btn-home" type="submit" value="Submit Changes" />
							</div>
                        </form>
					</div>
				</div>
            </div>
		</div>
    </body>
</html>