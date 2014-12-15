<?php
	include 'scripts/record.php';
    
	session_start();
    
    $record_name = $_POST["record_name"];
	$artist_name = $_POST["artist_name"];	
	$genre = $_POST["genre"];
	$record_year = $_POST["record_year"];
	
	$new_record = new Record($record_name, $artist_name, $genre, $record_year);
	
	if(isset($_SESSION['myRecords'])) {
		$count = count($_SESSION['myRecords']);
	} else {
		$count = 0;
	}
	$_SESSION['myRecords'][$count] = $new_record;
?>
<script>
	window.location= "record_catalog.php?message=" + "<?php echo $_POST['record_name']?> by <?php echo $_POST['artist_name']?> added";
</script>