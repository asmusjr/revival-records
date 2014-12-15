<?php
	$servername = "68.178.217.19";
	$username = "revivalrecordsdb";
	$password = "RevivalRecords123!";
	$dbname = "revivalrecordsdb";
	
	$conn = mysql_connect($servername, $username, $password); if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
	$db_selected = mysql_select_db($dbname, $conn); if (!$db_selected) {die ('Can\'t use the db : ' . mysql_error());}
	
	$record_name = $_POST["recordName"];
	$record_year = $_POST["recordYear"];
	$record_genre = $_POST["genre"];
	$artist_name = $_POST["artistName"];
	
	// populate record table
	$sql = mysql_query("INSERT INTO Record (record_id, artist_name, record_name, record_year, genre)
	VALUES (null, '$artist_name', '$record_name', '$record_year', '$record_genre')");

	if ($sql) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysql_error($conn);
	}
	mysql_close($conn);
?>
<script>
    window.location= "record_catalog.php?message=" + "<?php echo $_POST['recordName']?> by <?php echo $_POST['artistName']?> added";
</script>