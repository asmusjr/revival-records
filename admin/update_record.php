<?php
	$servername = "68.178.217.19";
	$username = "revivalrecordsdb";
	$password = "RevivalRecords123!";
	$dbname = "revivalrecordsdb";
	
	$conn = mysql_connect($servername, $username, $password); if (!$conn) {die("Connection failed: " . mysql_connect_error());}
	$db_selected = mysql_select_db($dbname, $conn); if (!$db_selected) {die ('Can\'t use the db : ' . mysql_error());}
	
	$recordID = $_POST["record_id"];
	$artistName = $_POST["artist_name"];
	$recordName = $_POST["record_name"];
	$recordYear = $_POST["record_year"];
	$recordGenre = $_POST["genre"];
		
	$sql = mysql_query("UPDATE Record SET record_name='$recordName', artist_name='$artistName', record_year='$recordYear', genre='$recordGenre' WHERE record_id='$recordID'");

	if ($sql) {
		echo 'Record updated successfully';
	} else {
		echo 'Error: ' . $sql . '<br>' . mysql_error($conn);
		echo $recordID . '<br>';
		echo $artistName . '<br>';
		echo $recordName . '<br>';
		echo $recordYear . '<br>';
		echo $recordGenre;
	}
	mysql_close($conn);
?>
<script>
	window.location = "record_catalog.php";
</script>