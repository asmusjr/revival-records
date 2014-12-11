<?php	include 'scripts/record.php';
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
    	<script src="js/jQuery.jPlayer.2.7.0/jquery.jplayer.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
		<script>$.validate();</script>
	</head>
	<body>
		<?php include 'header-footer.php'; ?>
		
		<div class="container">
			<div class="row">
				<div class="main-content col-md-10">
					<h2 class="content-large-header"><span class="text-muted">My</span> Records</h2>
					<p>Welcome to My Records! Here, you can see the records you have added to your list.</p>
					<p>To learn about the records we offer at our store, see <a href="about.php">About Our Records</a>.</p>
					<p>To add records to this list, navigate to the <a href="record_catalog.php">Records Catalog</a>.</p>
					<p>Ready to send your request? Click the submission button for in-store pick-up.</p>
					<hr/>
					<ul class="nav nav-pills text-center" role="tablist">
						<form action="clear_all_records.php" id="clear_all_records" method="post">
						<li role="presentation" class="active"><a href="#" onclick="$('#clear_all_records').submit()">Clear All Records</a></li>
						</form>
					</ul>
				</div>
				<div class="col-md-2 text-center">
					<div class="row">
						<div class="col-xs-12">
							<p><a href="record_catalog.php"><button class="btn btn-default btn-record"><img class="record-btn-image2" src="img/catalog-notext-icon.png"/><br/>Record Catalog</button></a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p><a href="my_records.php"><button class="btn btn-danger btn-record"><img class="record-btn-image" src="img/record.png"/><br/>My Records</button></a></p>
							<button class="btn btn-sample" data-toggle="modal" data-target="#myModal" id="createRecord">Complete &<br/>Send Request</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 main-content">
					<ul class="records-list">
						<?php if(isset($_SESSION['myRecords'])) {
								$record_id = 0;
								foreach ($_SESSION["myRecords"] as $record) {
								?>
							<li class="record-item-0">
								<ul class="media-list">
									<form action="remove_record.php" id="remove_record-<?php echo $record_id ?>" method="post">
										<input type="hidden" value="<?php echo $record->record_name; ?>" name="record_name" />
										<input type="hidden" value="<?php echo $record->artist_name ?>" name="artist_name" />
										<input type="hidden" value="<?php echo $record->genre ?>" name="genre" />
										<input type="hidden" value="<?php echo $record->record_year ?>" name="record_year" />

										<a href="#" onclick="$('#remove_record-<?php echo $record_id ?>').submit()" style="display:block">
											<li class="media add-record-box">
												<img src="img/record.png" width="50px">
												<p>REMOVE</p>
											</li>
										</a>
									</form>
									<p>Album: <?php echo $record->record_name; ?></p>
									<p>Artist: <?php echo $record->artist_name; ?></p>
									<p>Genre: <?php echo $record->genre; ?></p>
									<p>Year: <?php echo $record->record_year; ?></p>
								</ul>
							</li>
							<?php 
								++$record_id;
								}
						} ?>
					</ul>
				</div>
			</div>
		</div>	
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">Request a Record</h4>
					</div>
					<div class="modal-body">
						<form action="webformmailer.php" method="post">
							<input type="hidden" name="subject" value="Submission" />
							<input type="hidden" name="redirect" value="my_records.php" />
							<div class="form-group">
								<label for="inputFirstName">First Name</label>
								<input type="text" name="First name" class="form-control" id="inputFirstName" placeholder="First Name" data-validation="length" data-validation-length="min1">
							</div>
							<div class="form-group">
								<label for="inputFirstName">Last Name</label>
								<input type="text" name="Last name" class="form-control" id="inputFirstName" placeholder="First Name" data-validation="length" data-validation-length="min1">
							</div>
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email" data-validation="email">
							</div>
							<div class="form-group">
								<label for="inputPhone">Phone</label>
								<input type="text" name="Phone" class="form-control" id="inputPhone" placeholder="Phone" data-validation="number">
							</div>
							<div class="form-group">
								<label for="inputRecord">Chosen Records:</label>
								<br>
								<textarea type="text" rows="7" cols="45" class="form-control" id="inputRecord" name="Request" readonly style="cursor:default"><?php foreach ($_SESSION["myRecords"] as $record_id => $record) {
										echo $record->record_name . ', ' . $record->artist_name . "\n";		
									}?>
								</textarea>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-lg" data-dismiss="modal">Close</button>
								<button type="submit" name="submit" class="btn btn-lg btn-primary">Submit Request</button>
							</div>
							<input type="hidden" name="form_order" value="alpha"/>
							<input type="hidden" name="form_delivery" value="default"/> 
							<input type="hidden" name="form_format" value="html"/>
						</form>
						<script>$.validate();</script>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
