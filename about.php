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
    	<script src="js/jQuery.jPlayer.2.7.0/jquery.jplayer.min.js"></script>
		<script>
			jQuery.fn.center = function () {
				this.css("position","absolute");
				this.css("top", ( $(window).height() - this.height() ) / 2+$(window).scrollTop() + "px");
				this.css("left", ( $(window).width() - this.width() ) / 2+$(window).scrollLeft() + "px");
				return this;
			}
			$(document).ready(function() {
				$("#thumbnail img").click(function(e){
					$("body #background").css({"opacity" : "0.7"})
									.fadeIn("slow");
					$("#large").html("<img src='"+$(this).parent().attr("href")+"' alt='"+$(this).attr("alt")+"' /><br/>"+$(this).attr("rel")+"")
							   .center()
							   .fadeIn("slow");
					return false;
				});
				style="height:100px;"
				$(document).keypress(function(e){
					if(e.keyCode==27){
						$("body #background").fadeOut("slow");
						$("#large").fadeOut("slow");
					}
				});
				$("body #background").click(function(){
					$("body #background").fadeOut("slow");
					$("#large").fadeOut("slow");
				});
				$("#large").click(function(){
					$("body #background").fadeOut("slow");
					$("#large").fadeOut("slow");
				});
			});
		</script>
	</head>
	<body>
		<?php include 'header-footer.php' ?>
		<div class="container">
			<div class="col-md-12 main-content">
            	<div class="row">
                	<div class="col-md-5">
                        <h2 class="content-large-header">About <span class="text-muted">the Store</span></h2>
                        <p id="about-content">Walking into Revival Records for the first time, one gets an overwhelming sense of community.
                        It is a community of seekers,
                        not only in the sense of finding the next great piece of nostalgia or favorite hit song,
                        but seekers of ideas,
                        movements and emotions, 
                        of like-minded ears and close friends.
                        Old 45s hang from the ceiling as if to say those who enter have a common goal in preserving music and sharing it with others.
                        The staff will share their favorite recent albums with you as if you are family,
                        and the old phonograph player, 
                        displayed prominently on one shelf, 
                        is a reminder that what this store is selling goes beyond just goods. 
                        Revival Records is in the business of sharing the experience.
                        Sifting through record crates and shelves, 
                        bringing a favorite album to the counter, 
                        and bringing it home to play for oneself and others is a timeless act that allows others to share their ideas within the Chippewa Valley community and beyond.
                        Revival Records has created an atmosphere that promotes the sharing of the listening experience and feels like a lot more than a business, it feels like an extension of home.</p>
                    </div>
                    <div class="col-md-7 no-margin">
                    	<iframe class="col-sm-12 col-xs-12" width="480" height="360" src="//www.youtube.com/embed/rfhZ6FvaJ3M" frameborder="0" allowfullscreen></iframe>
                    </div>  
                </div>                
            	<div class="row">
                	<div class="col-md-7">
                    	<div class="polaroid_imgs">
                            <a title="Billy Siegel"><img height="210" src="img/billy_siegel.jpg" alt="img1" title="Billy Siegel" /></a>
                            <a title="Revival Records"><img height="210" src="img/revdif.png" alt="img2" title="Revival Records" /></a>
                        </div>
                    </div>
                    <div class="col-md-5 no-margin">
                    	<p></p>
                        <h2 class="content-large-header">About <span class="text-muted">the Records</span></h2>
                        <p>Here at Revival Records, we pride ourselves on having a wide variety of new and used vinyl to choose from. Although we cary a little bit of everything, our largest genres to choose from are pop and rock. Don&#39;t get discouraged if rock isn&#39;t your thing, we have a good sized collection of jazz, blues, reggae, folk, classical, soundtracks, country, kids and world music too. Most of the stacks at Revival Records are made up of used vinyl but we have a sizable stock of new vinyl and it&#39;s growing every week! Ask the staff about their favorite albums, new or old if you&#39;re looking to try something new. Oh yeah, and we&#39;ve got CDs too! A big way we build our collection of used vinyl and CDs is from people bringing in music to sell or trade. In addition to a great selection of vinyl, you can find all sorts of record accessories at Revival Records. We have cleaning supplies, protective inner and outer sleeves and frames for displaying your favorite records. And for those tough cleaning jobs we offer a professional cleaning service here at the store. Revival Records has an ever changing selection of home audio equipment. We have new and used turntables, receivers, speakers and pre-amps for sale. We also purchase used equipment for cash or trade if you are looking to upgrade your stereo.</p>
					</div>
                </div>
			</div>				
		</div>
	</body>
</html>