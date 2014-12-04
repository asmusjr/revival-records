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
		
		<div class="container">
			<div class="row">
				<div class="main-content col-md-10">
					<h2 class="content-large-header">Record <span class="text-muted">Catalog</span></h2>
					<p>Welcome to the record catalog section of Revival Records. Here, you can view...</p>
					<p>To learn about how we get our records, see about ...</p>
					<p>To request records to pick up the store ... then go to ... </p>
					
					<hr/>
					<ul class="nav nav-pills" role="tablist">
					  <li role="presentation" class="active"><a href="#">Sort by Artist</a></li>
					  <li role="presentation"><a href="#">Sort by Album</a></li>
					</ul>
				</div>
				<div class="col-md-2 text-center">
					<div class="row">
						<div class="col-xs-12">
							<p><a href="record_catalog.php"><img class="record-link-active" src="img/recordcatalogicon.jpg"/></a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p><a href="my_records.php"><img class="record-link" src="img/requestrecord.jpg"/></a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center">
					<ul class="pagination">
						<li class="active"><a href="#A">A</a></li>
						<li><a href="#B">B</a></li>
						<li><a href="#C">C</a></li>
						<li><a href="#D">D</a></li>
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
			<div class="row">
			<div class="col-xs-12 main-content">
			<div class="bs-docs-section">
			<div class="bs-glyphicons">
    <ul class="bs-glyphicons-list">
        <li id="A">
			<ul class="media-list">
				<li class="media">
					<a class="media-left" href="#">
						<img src="img/record.png" width="50px" alt="...">
						<a href="#"><span class="glyphicon glyphicon-plus"></span></a>
					</a>
				</li>
				<p>Taylor Swift</p>
				<p>1989</p>
				<p>Pop</p>
			</ul>
		</li>
		
		<?php
                	$servername = "68.178.217.19";
        			$username = "revivalrecordsdb";
        			$password = "RevivalRecords123!";
        			$dbname = "revivalrecordsdb";
                    
                    $conn = mysql_connect($servername, $username, $password); if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
                    $db_selected = mysql_select_db($dbname, $conn);  if (!$db_selected) {die ('Can\'t use the db : ' . mysql_error());}
                    
                    $result = mysql_query("SELECT * FROM Record"); 
                    
                    while($row = mysql_fetch_array($result)) {  ?>
					  
						<li>
							<ul class="media-list">
								<li class="media">
									<a class="media-left" href="#">
										<img src="img/record.png" width="50px" alt="...">
										<a href="#"><span class="glyphicon glyphicon-plus"></span></a>
									</a>
								</li>
								<p>Artist</p>
								<p><?php echo $row['record_name'];?></p>
								<p>Genre</p>
							</ul>
						</li>
					  
                       <?php
                       }
        			mysql_close($conn);
        	        ?>
    </ul>
  </div>
			</div>
			</div>
			<div class="row">
				<div class="col-xs-12 main-content">
				<table cellpadding="0" width="100%" cellspacing="0" style = "font-size: 16px">
				<tr>
					<td>
					<div  data-toggle="modal" data-target="#myModal" id="requestRecord" style="width:80px;height:80px;">
						 User Login<img src="img/recordcatalogicon.jpg" alt="" width="80" height="80" border="1"></a>
					</div>
					</td>
				</tr>
			</table>
		</div>
        <?php
            function insertRow($name){
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
                
    			$sql = mysql_query("INSERT INTO Record_Request (record_id, request_email, request_phone, request_record, request_first, request_last, request_date)
    			VALUES ('$record_id', '$email', '$phone', null, '$request_first', '$request_last', '$current_date')");
    			if ($sql) {
    				echo "New record created successfully";
    			} else {
    				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    			}
    			mysqli_close($conn);
                }
        ?>
		<script>
           /*function insertRow(){
             $.ajax({
                type: "POST",
                url: "my_records.php",
                data: { name: $("select[name='record_name']").val()},
                success:function( msg ) {
                 alert( "Row Inserted: " + msg );
                }
               });
          }*/
        </script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
