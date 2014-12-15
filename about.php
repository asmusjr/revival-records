<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Revival Records - Eau Claire Records</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/master.css">
        
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/about.js"></script>
	</head>
	<body id="swirl">
		<?php include 'header-footer.php';
			$about_1 = "about/about-store.html";
			$file_1 = fopen($about_1, "r") or die("Unable to load content 1");
			$file_1_content = htmlspecialchars_decode(fread($file_1, filesize($about_1)));
		
			$about_2 = "about/about-records.html";
			$file_2 = fopen($about_2, "r") or die("Unable to load content 2");
			$file_2_content = htmlspecialchars_decode(fread($file_2, filesize($about_2)));
		?>
        <div id="polaroid-background"></div>
        <div id="polaroid-large"></div>
		<div class="container">
			<div class="col-md-12 main-content">
            	<div class="row">
                	<div class="col-md-5 left-15-padding">
                        <h2 class="content-large-header">About <span class="text-muted">the Store</span></h2>
                        <p><?php echo $file_1_content ?></p>
					</div>
                    <div class="col-md-6 youtube">
                    	<iframe class="col-sm-12 col-xs-12" width="480" height="360" src="//www.youtube.com/embed/rfhZ6FvaJ3M" frameborder="0" allowfullscreen></iframe>
                    </div>  
                </div>                
            	<div class="row">
                	<div class="col-md-7 col-sm-12 col-xs-12">
                    	<div class="polaroid_imgs top-15-margin " id="thumbnail">
                            <a title="Billy Siegel" href="img/billy_siegel.jpg"><img rel="Store owner, Billy Siegel" height="210" src="img/billy_siegel.jpg" alt="img1" title="Billy Siegel" /></a>
                            <a title="Revival Records" href="img/revdif.png"><img rel="An inside view of the store" height="210" src="img/revdif.png" alt="img2" title="Revival Records" /></a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h2 class="content-large-header">About <span class="text-muted">the Records</span></h2>
                        <p><?php echo $file_2_content ?></p>
					</div>
                </div>
			</div>				
		</div>
	</body>
</html>