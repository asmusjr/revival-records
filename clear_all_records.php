<?php
    session_start();
    session_unset();
	session_destroy();
?>
<script>
    window.location = "my_records.php";
</script>