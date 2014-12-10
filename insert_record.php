<?php
    session_start();
    $recordName = $_POST["record_name"];
	if(isset($_SESSION['myRecords'])) {
		$count = count($_SESSION['myRecords']);
	} else {
		$count = 0;
	}
	$_SESSION['myRecords'][$count] = $recordName;
?>
<script>
    window.location = "record_catalog.php";
</script>