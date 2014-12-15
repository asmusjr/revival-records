<?php
	include 'scripts/record.php';
    
	session_start();
	
    $record_name = $_POST["record_name"];
	$artist_name = $_POST["artist_name"];
	$genre = $_POST["genre"];
	$record_year = $_POST["record_year"];

	foreach ($_SESSION["myRecords"] as $record_id => $record) {
		if($record->IsEqual($record_name, $artist_name, $genre, $record_year)) {
			unset($_SESSION['myRecords'][$record_id]);
			break;
		}
	}
?>
<script>
    window.location= "my_records.php?message=" + "<?php echo $_POST['record_name']?> by <?php echo $_POST['artist_name']?> removed";
</script>