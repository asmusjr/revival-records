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
	</head>
	<body>
		<?php include 'header-footer.php' ?>
		<div class="container">
			<div class="row">
				<div class="main-content col-md-10">
					<h2 class="content-large-header">Record <span class="text-muted">Catalog</span></h2>
					<p>Welcome to the record catalog section of Revival Records. Here, you can view...</p>
					<p>To learn about how we get our records, see about ...</p>
					<p>To request records to pick up the store ... then go to ...</p>
					<hr/>
					<ul class="nav nav-pills text-center" role="tablist">
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
						<li class="active"><a href="#a">A</a></li>
						<li><a href="#b">B</a></li>
						<li><a href="#c">C</a></li>
						<li><a href="#d">D</a></li>
						<li><a href="#e">E</a></li>
						<li><a href="#f">F</a></li>
						<li><a href="#g">G</a></li>
						<li><a href="#h">H</a></li>
						<li><a href="#i">I</a></li>
						<li><a href="#j">J</a></li>
						<li><a href="#k">K</a></li>
						<li><a href="#l">L</a></li>
						<li><a href="#m">M</a></li>
						<li><a href="#n">N</a></li>
						<li><a href="#o">O</a></li>
						<li><a href="#p">P</a></li>
						<li><a href="#q">Q</a></li>
						<li><a href="#r">R</a></li>
						<li><a href="#s">S</a></li>
						<li><a href="#t">T</a></li>
						<li><a href="#u">U</a></li>
						<li><a href="#v">V</a></li>
						<li><a href="#w">W</a></li>
						<li><a href="#x">X</a></li>
						<li><a href="#y">Y</a></li>
						<li><a href="#z">Z</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 main-content">
					<ul class="records-list">
						<?php
							$servername = "68.178.217.19";
							$username = "revivalrecordsdb";
							$password = "RevivalRecords123!";
							$dbname = "revivalrecordsdb";
							
							$conn = mysql_connect($servername, $username, $password); if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
							$db_selected = mysql_select_db($dbname, $conn);  if (!$db_selected) {die ('Can\'t use the db : ' . mysql_error());}
							
							$result = mysql_query("SELECT * FROM Record"); 
							
							$counter = 0; // used just coloring effects
							$offset = 0;
							while($row = mysql_fetch_array($result)) {  //while loop is closed in next php tag
								$id = strtolower($row['record_name'][0]); // s
						?>
						<li id="<?php echo $id ?>" class="record-item-<?php echo ($counter%2 + $offset%2)%2 ?>">
							<ul class="media-list">
								<a href="#" style="display:block">
									<li class="media add-record-box">
										<img src="img/record.png" width="50px">
										<span class="glyphicon glyphicon-plus"></span> ADD
									</li>
								</a>
								<p>Artist <?php echo $counter ?></p>
								<p><?php echo $row['record_name'];?></p>
								<p>Genre</p>
							</ul>
						</li>
						<?php ++$counter;
							if($counter%4==0) ++$offset;
						} //end of while loop
						mysql_close($conn); ?>
					</ul>
				</div>
			</div>
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
    </body>
</html>