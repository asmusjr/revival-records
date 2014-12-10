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
						<h2 class="content-large-header">Edit <span class="text-muted">Home</span></h2>
						<p>Welcome to the administrative tools for the home page.</p>
                    </div>
                    <hr />
					<p class="text-center">You can edit the text displayed on the three main sections of the about page.
                    <br/>Sections are listed from left to right. 
                    <br/>To update, type desired changes into the box below for any or all of the sections.</p>
                     <form>
                     	<table class="table-responsive">
                        	<tr>
                            	<td class="pull-right">Header 1:</td>
                                <td><input type="text" name="header1"/></td>
                                <td class="pull-right">Header 2:</td>
                                <td><input type="text" name="header2"/></td>
                                <td class="pull-right">Header 3:</td>
                                <td><input type="text" name="header3"/></td>
                            </tr>
                           	<tr>
                            	<td class="pull-right">Content 1:</td>
                                <td><input type="text" name="content1"/></td>
                                <td class="pull-right">Content 2:</td>
                                <td><input type="text" name="content2"/></td>
                                <td class="pull-right">Content 3:</td>
                                <td><input type="text" name="content3"/></td>
                            </tr>
                        </table>
                           <input class="btn btn-danger pull-right" type="submit" value="Submit Changes"/>
                        </form>
				</div>
            </div>
		</div>
    </body>
</html>