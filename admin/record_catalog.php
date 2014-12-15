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
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
		<script>$.validate();</script>
	</head>
	<body id="admin">
		<?php include 'header-footer.php' ?>
		<div class="container">
			<div class="row main-content">
				<div class="col-md-8">
					<h2 class="content-large-header">Record <span class="text-muted">Catalog</span></h2>
					<p>Welcome to the administrative tools for the records catalog.</p>
					<p>Here, you can create new records, update existing ones, and delete unneeded ones.</p>
				</div>
				<div class="col-md-4 text-center">
					<h2>Create a Record</h2>
					<button class="btn btn-default" data-toggle="modal" data-target="#myModal" id="createRecord">Click Here</button>
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
				<div class="container main-content text-center">
					<h2>Update and Delete Records</h2>
					
					<ul class="records-list">
				<?php
                	$servername = "68.178.217.19";
        			$username = "revivalrecordsdb";
        			$password = "RevivalRecords123!";
        			$dbname = "revivalrecordsdb";
                    
                    $conn = mysql_connect($servername, $username, $password); if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
                    $db_selected = mysql_select_db($dbname, $conn);  if (!$db_selected) {die ('Can\'t use the db : ' . mysql_error());}
                    
                    $result = mysql_query("SELECT * FROM Record ORDER BY artist_name"); 
                    
					$sort_by = "artist_name";
					
                    $previous_letter = NULL;
					$current_letter = NULL;
					
					while($row = mysql_fetch_array($result)) {  //while loop is closed in next php tag
						$current_letter = strtoupper(substr($row[$sort_by], 0, 1));
								
						if($current_letter !== $previous_letter) { 
							$previous_letter = $current_letter; ?>
							
							<li id="<?php echo $previous_letter ?>" class="record-item-section">
								<h3><?php echo $previous_letter ?></h3>
							</li>
						<?php } ?>
						<li class="record-item-0">
							<ul class="media-list">
								<li class="admin-li">
									<div data-toggle="modal" data-target="#editModal" id="editRecord" style="display:inline-block">
										<form id="modal_info">
											<input type="hidden" value = "<?php echo $row['record_id'];?>" class="form-control" name="record_id" id="recordIDEdit">
											<input type="hidden" value = "<?php echo $row['artist_name'];?>" class="form-control" name="artist_name" id="artistNameEdit">
											<input type="hidden" value = "<?php echo $row['record_name'];?>" class="form-control" name="record_name" id="recordNameEdit">
											<input type="hidden" value = "<?php echo $row['record_year'];?>" class="form-control" name="record_year" id="recordYearEdit">
											<input type="hidden" value = "<?php echo $row['genre'];?>" class="form-control" name="record_genre" id="genreEdit">
											<input class="btn btn-default" type="button" value="Edit" onclick="populate(this.form.recordIDEdit.value, this.form.artistNameEdit.value, this.form.recordNameEdit.value, this.form.recordYearEdit.value, this.form.genreEdit.value);" />
										</form>
									</div>
									<form action="remove_record.php" method="post">
										<input type="hidden" value = "<?php echo $row['record_id'];?>" name="record_id" />
										<input class="btn btn-danger" type="submit" value="Remove" />
									</form>
								</li>	
								<p>Artist: <?php echo $row['artist_name'] ?></p>
								<p>Album: <?php echo $row['record_name'] ?></p>
								<p>Genre: <?php echo $row['genre'] ?></p>
								<p>Year: <?php echo $row['record_year'] ?></p>
							</ul>
						</li>
                       <?php
                       } mysql_close($conn); ?>
					</ul>
				</div>
			</div>
		</div>
		
		<form action="insert_record.php" method="post">
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel">Create Record</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label for="recordName">Record Name</label>
									<input type="text" class="form-control" name="recordName" id="recordName" placeholder="Record Name" data-validation="length" data-validation-length="min1">
								</div>
								<div class="form-group">
									<label for="recordYear">Record Year</label>
									<input type="text" class="form-control" name="recordYear" id="recordYear" placeholder="Record Year" data-validation="number">
								</div>
								<div class="form-group">
									<label for="artistName">Artist Name</label>
									<input type="text" class="form-control" name="artistName" id="artistName" placeholder="Artist Name" data-validation="length" data-validation-length="min1">
								</div>
								<div class="form-group">
									<label for="artistName">Genre</label>
									<input type="text" class="form-control" name="genre" id="genre" placeholder="Genre" data-validation="length" data-validation-length="min1">
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-lg" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-lg btn-primary">Create</button>
						</div>
					</div>
				</div>
			</div>
        </form>
        <script>$.validate();</script>
		<form action="update_record.php" method="post">
			<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel">Edit Record</h4>
						</div>
						<div class="modal-body">
							<form>
							   <div class="form-group">
									<input type="hidden" class="form-control" name="record_id" id="record_id" placeholder="Record ID" data-validation="number">	
								</div>
								<div class="form-group">
									<label for="recordName">Record Name</label>
									<input type="text"  class="form-control" name="record_name" id="record_name" placeholder="Record Name" data-validation="length" data-validation-length="min1">
								</div>
								<div class="form-group">
									<label for="recordYear">Record Year</label>
									<input type="text"  class="form-control" name="record_year" id="record_year" placeholder="Record Year" data-validation="number">
								</div>
								<div class="form-group">
									<label for="artistName">Artist Name</label>
									<input type="text"  class="form-control" name="artist_name" id="artist_name" placeholder="Artist Name" data-validation="length" data-validation-length="min1">
								</div>
								<div class="form-group">
									<label for="genre">Genre</label>
									<input type="text" class="form-control" name="genre" id="record_genre" placeholder="Genre" data-validation="length" data-validation-length="min1">
								</div>
							</form>
                        <script>$.validate();</script>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-lg" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-lg btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>
		</form>
    </body>
</html>
