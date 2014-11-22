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
    </head>
	<body>
		<?php include 'header-footer.php' ?>
		
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
		
		
		
		<div class = "recordsTitle" align="center">
			<h2 style="font-size: 36px; padding: 2px 25px">Wish<span class="text-muted">List</span></h2>
		</div>
		<div class = "catalog" align = "center">
			<div class="pagination" >
				<ul align = "center">
					<li class="active"><a href="#">A</a></li>
					<li><a href="#">B</a></li>
					<li><a href="#">C</a></li>
					<li><a href="#">D</a></li>
					<li><a href="#">E</a></li>
					<li><a href="#">F</a></li>
					<li><a href="#">G</a></li>
					<li><a href="#">H</a></li>
					<li><a href="#">I</a></li>
					<li><a href="#">J</a></li>
					<li><a href="#">K</a></li>
					<li><a href="#">L</a></li>
					<li><a href="#">M</a></li>
					<li><a href="#">N</a></li>
					<li><a href="#">O</a></li>
					<li><a href="#">P</a></li>
					<li><a href="#">Q</a></li>
					<li><a href="#">R</a></li>
					<li><a href="#">S</a></li>
					<li><a href="#">T</a></li>
					<li><a href="#">U</a></li>
					<li><a href="#">V</a></li>
					<li><a href="#">W</a></li>
					<li><a href="#">X</a></li>
					<li><a href="#">Y</a></li>
					<li><a href="#">Z</a></li>
				</ul>
			</div>
		</div>
		
		<div class = "container main-content">
			<table cellpadding="0" width="100%" cellspacing="0" style = "font-size: 16px">
			<tr>
				<td >User Record 1<img src="img/recordcatalogicon.jpg" alt="" width="80" height="80" border="1"></a></td>
				<td >User Record 2<img src="img/recordcatalogicon.jpg" alt="" width="80" height="80" border="1"></a></td>
				<td >User Record 3<img src="img/recordcatalogicon.jpg" alt="" width="80" height="80" border="1"></a></td>
				
			</tr>
			<tr>
				<td >User Record 4<img src="img/recordcatalogicon.jpg" alt="" width="80" height="80" border="1"></a></td>
				<td >User Record 5<img src="img/recordcatalogicon.jpg" alt="" width="80" height="80" border="1"></a></td>
				<td >User Record 6<img src="img/recordcatalogicon.jpg" alt="" width="80" height="80" border="1"></a></td>
				
			</tr>
		</table>
		
		</div>
		
		<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pointer" data-toggle="modal" data-target="#myModal" style="width:100px;height:100px;background-image:url(img/requestrecord.jpg);margin-right:25%;margin-left:28%;">
		
	</div>
			
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pointer" style="width:100px;height:100px;background-image:url(img/recordcatalogicon.jpg);">
			
	</div>
</div>
		
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
		      </div>
    </div>
  </div>
</div>
		
    </body>
</html>