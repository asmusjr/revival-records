<?php	include "scripts/record.php";
		session_start(); ?>
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
	</head>
	<body id="swirl">
		<?php include 'header-footer.php' ?>

		<?php
			$sort_by = "artist_name";
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				if (isset($_POST['sort-by']) && $_POST['sort-by'] === 'album') {
					$sort_by = "record_name";
				}
			}
			$sorted_by_artist = ($sort_by == "artist_name"); ?>

		<form action="record_catalog.php" id="sort-by-artist" method="post">
			<input type="hidden" name="sort-by" value="artist" /> 
		</form>
		<form action="record_catalog.php" id="sort-by-album" method="post">
			<input type="hidden" name="sort-by" value="album" /> 
		</form>
		
		<div class="container">
			<div class="row">
				<div class="main-content col-md-10">
					<h2 class="content-large-header">Record <span class="text-muted">Catalog</span></h2>
					<p>Welcome to the record catalog section of Revival Records. Here, you can view our latest records at the store.</p>
					<p>To learn about the records we offer at our store, see <a href="about.php">About Our Records</a>.</p>
					<p>See a record you like? You can request records from the store.</p>
					<p>Simply add them to your list (<a href="my_records.php">My Records</a>), where you can then submit the request for in-store pick-up.</p>
					<hr/>
					<ul class="nav nav-pills text-center" role="tablist">
						<li role="presentation" <?php if($sorted_by_artist) echo "class='active'" ?>><a href="#" onclick="document.forms['sort-by-artist'].submit()";>Sort by Artist</a></li>
						<li role="presentation" <?php if(!$sorted_by_artist) echo "class='active'" ?>><a href="#" onclick="document.forms['sort-by-album'].submit();">Sort by Album</a></li>
					</ul>
				</div>
				<div class="col-md-2 text-center">
					<div class="row">
						<div class="col-xs-12">
							<p><a href="record_catalog.php"><button class="btn btn-danger btn-record"><img class="record-btn-image2" src="img/catalog-notext-icon.png"/><br/>Record Catalog</button></a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p><a href="my_records.php"><button class="btn btn-default btn-record"><img class="record-btn-image" src="img/record.png"/><br/>My Records</button></a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center">
					<ul class="pagination">
						<li><a href="#A">A</a></li>
						<li><a href="#B">B</a></li>
						<li><a href="#C">C</a></li>
						<li><a href="#D">D</a></li>
						<li><a href="#E">E</a></li>
						<li><a href="#F">F</a></li>
						<li><a href="#G">G</a></li>
						<li><a href="#H">H</a></li>
						<li><a href="#I">I</a></li>
						<li><a href="#J">J</a></li>
						<li><a href="#K">K</a></li>
						<li><a href="#L">L</a></li>
						<li><a href="#M">M</a></li>
						<li><a href="#N">N</a></li>
						<li><a href="#O">O</a></li>
						<li><a href="#P">P</a></li>
						<li><a href="#Q">Q</a></li>
						<li><a href="#R">R</a></li>
						<li><a href="#S">S</a></li>
						<li><a href="#T">T</a></li>
						<li><a href="#U">U</a></li>
						<li><a href="#V">V</a></li>
						<li><a href="#W">W</a></li>
						<li><a href="#X">X</a></li>
						<li><a href="#Y">Y</a></li>
						<li><a href="#Z">Z</a></li>
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
							
							$result = mysql_query("SELECT * FROM Record ORDER BY " . $sort_by); 
							
							$counter = 0; // used just coloring effects
							$offset = 0;
							
							$id = 0;
							
							$previous_letter = NULL;
							$current_letter = NULL;
							
							while($row = mysql_fetch_array($result)) {  //while loop is closed in next php tag
								$current_letter = strtoupper(substr($row[$sort_by], 0, 1));
								
								if($current_letter !== $previous_letter) {
									$previous_letter = $current_letter;
									$counter = 0;
									$offset = 0; ?>
									<li id="<?php echo $previous_letter ?>" class="record-item-section">
										<h3><?php echo $previous_letter ?></h3>
									</li>
						<?php   } ?>
						<li class="record-item-<?php echo ($counter%2 + $offset%2)%2 ?>">
							<ul class="media-list">
								<form action="insert_record.php" id="insert_record-<?php echo $id ?>" method="post">
									<input type="hidden" value="<?php echo $row['record_name'];?>" name="record_name" />
									<input type="hidden" value="<?php echo $row['artist_name'];?>" name="artist_name" />
									<input type="hidden" value="<?php echo $row['genre']; ?>" name="genre" />
									<input type="hidden" value="<?php echo $row['record_year']; ?>" name="record_year" />
										<a onclick="$('#insert_record-<?php echo $id ?>').submit()" href="#" style="display:block">
											<li class="media add-record-box">
												<img src="img/recordrequest-notext-icon.png" width="50px">
												ADD
											</li>
										</a>
									</input>
								</form>
								<?php if($sorted_by_artist) { ?>
								<p>Artist: <?php echo $row['artist_name'] ?></p>
								<p>Album: <?php echo $row['record_name'] ?></p>
								<?php } else { ?>
								<p>Album: <?php echo $row['record_name'] ?></p>
								<p>Artist: <?php echo $row['artist_name'] ?></p>
								<?php } ?>
								<p>Genre: <?php echo $row['genre'] ?></p>
								<p>Year: <?php echo $row['record_year'] ?></p>
							</ul>
						</li>
						<?php ++$counter;
							if($counter % 4 == 0) {
								++$offset;
							}
							++$id;
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