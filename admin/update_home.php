<?php session_start();
	
	function removeslashes($string) {
		$string=implode("",explode("\\",$string));
		return stripslashes(trim($string));
	}
?>
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
	<body id="admin-body">
		<?php include 'header-footer.php' ?>
        
        <?php echo $_SESSION['myvar']; ?>
		
		<div class="container">
			<div class="row main-content">
				<div class=" col-md-12">
                	<div class="text-center">
						<h2 class="content-large-header">Edit <span class="text-muted">Home</span></h2>
						<h4 class="text-muted">Welcome to the administrative tools for the home page.</h4>
                    </div>
                    <hr />
					<?php	$title_1_file = "../home/title-1.txt";
							$title_2_file = "../home/title-2.txt";
							$title_3_file = "../home/title-3.txt";
							$content_1_file = "../home/content-1.html";
							$content_2_file = "../home/content-2.html";
							$content_3_file = "../home/content-3.html";
							if ($_SERVER['REQUEST_METHOD'] === 'POST') {
								if (isset($_POST['btn-home'])) {
									$file1 = fopen($title_1_file, "w+"); 
									fwrite($file1, removeslashes(htmlspecialchars($_POST['title-1'], ENT_QUOTES, "UTF-8")));
									fclose($file1);
									
									$file2 = fopen($title_2_file, "w+"); 
									fwrite($file2, removeslashes(htmlspecialchars($_POST['title-2'], ENT_QUOTES, "UTF-8")));
									fclose($file2);
									
									$file3 = fopen($title_3_file, "w+"); 
									fwrite($file3, removeslashes(htmlspecialchars($_POST['title-3'], ENT_QUOTES, "UTF-8")));
									fclose($file3);
									
									$file4 = fopen($content_1_file, "w+"); 
									fwrite($file4, removeslashes(htmlspecialchars($_POST['content-1'], ENT_QUOTES, "UTF-8")));
									fclose($file4);
									
									$file5 = fopen($content_2_file, "w+"); 
									fwrite($file5, removeslashes(htmlspecialchars($_POST['content-2'], ENT_QUOTES, "UTF-8")));
									fclose($file5);
									
									$file6 = fopen($content_3_file, "w+"); 
									fwrite($file6, removeslashes(htmlspecialchars($_POST['content-3'], ENT_QUOTES, "UTF-8")));
									fclose($file6);
									
									echo "<p class='text-center'><b>Update successful</b></p>";
								}
							} ?>
					<p class="text-center">You can edit the text displayed on the three main sections of the about page.
                    <br/>Sections are listed from left to right. 
                    <br/>To update, type desired changes into the box below for any or all of the sections.</p>
                    <div class="row">
						<form action="update_home.php" id="update-home" method="post">
							<div class="col-md-4 text-center top-15-margin">
								<p>
									Header 1
									<br/>
									<input type="text" name="title-1" value="<?php htmlspecialchars_decode(include $title_1_file, ENT_QUOTES) ?>" />
								</p>
								<p>
									Content 1
									<br/>									
									<textarea form="update-home" type="text" rows="4" cols="50" name="content-1"><?php include htmlspecialchars_decode($content_1_file, ENT_QUOTES) ?></textarea>
								</p>
							</div>
							<div class="col-md-4 text-center top-15-margin">
								<p>
									Header 2
									<br />
									<input type="text" name="title-2" value="<?php include htmlspecialchars_decode($title_2_file, ENT_QUOTES) ?>" />
								</p>
								<p>
									Content 2
									<br />
									<textarea form="update-home" type="text" rows="4" cols="50" name="content-2"><?php include htmlspecialchars_decode($content_2_file, ENT_QUOTES) ?></textarea>
								</p>
							</div>
							<div class="col-md-4 text-center top-15-margin">
								<p>
									Header 3
									<br/>
									<input type="text" name="title-3" value="<?php htmlspecialchars_decode(include $title_3_file, ENT_QUOTES) ?>" />
								</p>
								<p>
									Content 3
									<br />
									<textarea form="update-home" type="text" rows="4" cols="50" name="content-3"><?php include htmlspecialchars_decode($content_3_file, ENT_QUOTES) ?></textarea>
								</p>
								<input class="btn btn-danger top-15-margin pull-right" name="btn-home" type="submit" value="Submit Changes"/>
							</div>                        
                        </form>
                    </div>
				</div>
            </div>
		</div>
    </body>
</html>