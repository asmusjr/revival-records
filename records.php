    <?php
		/*function postRecordRequest(){
            echo "buttstick";
			$servername = "68.178.217.19";
			$username = "revivalrecordsdb";
			$password = "RevivalRecords123!";
			$dbname = "revivalrecordsdb";
            
            $conn = mysql_connect($servername, $username, $password); if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
            $db_selected = mysql_select_db($dbname, $conn);  if (!$db_selected) {die ('Can\'t use the db : ' . mysql_error());}
            
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $record = $_POST["record"];
            $request_first = $_POST["firstName"];
            $request_last = $_POST["lastName"];
            $current_date = date("Y-m-d H:i:s");
            $record_id = $_POST["recordID"];
            // run a query to get records and populate dropdown with existing records to assign request_record in below query
			$sql = mysql_query("INSERT INTO Record_Request (record_id, request_email, request_phone, request_record, request_first, request_last, request_date)
			VALUES ('$record_id', '$email', '$phone', null, '$request_first', '$request_last', '$current_date')");
			if ($sql) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
			echo "DONE JEAH";
		}*/
	?>
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
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    	<script type="text/javascript" src="js/jQuery.jPlayer.2.7.0/jquery.jplayer.min.js"></script>
    
<script type="text/javascript">
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
<h1 align = "right" style = "padding: 10px 350px">Records</h1>

<!--<div class="row">-->
		<div id="thumbnail" class = "polaroid_imgs" style="margin-left:15%;">
			<a href="img/revdif.png" title=""><img height="150" src="img/revdif.png" alt="img1" rel=""/></a>
			<a href="img/P1050121.jpg" title=""><img height="150" src="img/P1050121.jpg" alt="img2" rel=""/></a>
			<p id="large"></p>
		</div>
		<div id="large"></div>
		<div id="background"></div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		</br></br>
		<div  class="rowTextCentered main-content" style="padding-right:5%;padding-left:5%;">
			<p>Here at Revival Records, we pride ourselves on having a wide variety of new and used vinyl to choose from. Although we cary a little bit of everything, our largest genres to choose from are pop and rock. Don't get discouraged if rock isn't your thing, we have a good sized collection of jazz, blues, reggae, folk, classical, soundtracks, country, kids and world music too. Most of the stacks at Revival Records are made up of used vinyl but we have a sizable stock of new vinyl and it's growing every week! Ask the staff about their favorite albums, new or old if you're looking to try something new. Oh yeah, and we've got CDs too!
			</p>
			<p>A big way we build our collection of used vinyl and CDs is from people bringing in music to sell or trade. </p>

		</div>
	</div>
<!--</div>-->
</br>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="rowTextCentered main-content" style="padding-left:5%;padding-right:5%;">
			<p>In addition to a great selection of vinyl, you can find all sorts of record accessories at Revival Records. We have cleaning supplies, protective inner and outer sleeves and frames for displaying your favorite records. And for those tough cleaning jobs we offer a professional cleaning service here at the store.
			</p>
			<p>Revival Records has an ever changing selection of home audio equipment. We have new and used turntables, receivers, speakers and pre-amps for sale. We also purchase used equipment for cash or trade if you  are looking to upgrade your stereo. 
			</p>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	
	</div>
</div>


</br></br></br>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pointer" data-toggle="modal" data-target="#myModal" style="width:100px;height:100px;background-image:url(img/requestrecord.jpg);margin-right:25%;margin-left:28%;">
		
	</div>
			
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pointer" style="width:100px;height:100px;background-image:url(img/recordcatalogicon.jpg);">
			
	</div>
</div>
</br></br>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Request a Record</h4>
      </div>
      <div class="modal-body">
      
      <form action="/webformmailer.php" method="post">
      <input type="hidden" name="subject" value="Submission" />
      <input type="hidden" name="redirect" value="records.php" />
      <div class="form-group">
    		<label for="inputFirstName">First Name</label>
			<input type="text" name="First name" class="form-control" id="inputFirstName" placeholder="First Name">
	  </div>
      <div class="form-group">
        	<label for="inputFirstName">Last Name</label>
			<input type="text" name="Last name" class="form-control" id="inputFirstName" placeholder="First Name">
	  </div>
      <div class="form-group">
			<label for="inputEmail">Email</label>
			<input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
	  </div>
      <div class="form-group">
			<label for="inputRecord">Record</label>
			<input type="text" name="Record" class="form-control" id="inputRecord" placeholder="Record">
	  </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-lg" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-lg btn-primary">Submit Request</button>
      </div>
      <input type="hidden" name="form_order" value="alpha"/>
      <input type="hidden" name="form_delivery" value="default"/> 
      <input type="hidden" name="form_format" value="html"/>
      </form>
		<!--<form action="records.php" method="post">
			<div class="form-group">
				<label for="inputFirstName">First Name</label>
				<input type="text" name="firstName" class="form-control" id="inputFirstName" placeholder="First Name">
			</div>
            <div class="form-group">
    			<label for="inputLastName">Last Name</label>
				<input type="text" name="lastName" class="form-control" id="inputLastName" placeholder="Last Name">
			</div>
			<div class="form-group">
				<label for="inputEmail">Email</label>
				<input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="inputPhone">Phone</label>
				<input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Phone">
			</div>
			<div class="form-group">
				<label for="inputRecord">Record</label>
				<input type="text" name="record" class="form-control" id="inputRecord" placeholder="Record">
			</div>
            <div class="form-group">
				<label for="inputRecordID">Record ID JEAH</label>
				<input type="text" name="recordID" class="form-control" id="inputRecord" placeholder="Record">
			</div>

            <div class="modal-footer">
                <button type="button" class="btn btn-lg" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-lg btn-primary">Submit Request</button>
            </div>
		</form>-->
      </div>
    </div>
  </div>
</div>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
	</body>
</html> 