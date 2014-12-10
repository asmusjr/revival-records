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
	<body id="admin-body">
		<?php include 'header-footer.php' ?>
        
        <?php echo $_SESSION['myvar']; ?>
		
		<div class="container">
			<div class="row main-content">
				<div class=" col-md-12">
                	<div class="text-center">
						<h2 class="content-large-header">Edit <span class="text-muted">About</span></h2>
						<h4 class="text-muted">Welcome to the administrative tools for the about page.</h4>
                    </div>
                    <hr />
					<p class="text-center">You can edit the text displayed on the about page by typing desired changes into the box below for one or both sections.</p>
                    <div class="row">
                    	<form>
                            <div class="col-md-6 text-center">
                                <p>
                                    About the Store
                                    <br/>
                                    <input type="text" name="aboutstore"/>
                                </p>
                            </div>
                            <div class="col-md-6 text-center">
                            	<p>
                                	About the Records
                                    <br />
                                    <input type="text" name="aboutrecords"/>
                                </p>
                                <input class="btn btn-danger pull-right" type="submit" value="Submit Changes"/>
                            </div>
                        </form>
                    </div>
				</div>
            </div>
		</div>
    </body>
</html>