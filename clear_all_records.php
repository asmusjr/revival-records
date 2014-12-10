<?php
    session_start();
    unset($_SESSION['myRecords']);
?>
<script>
    window.location = "my_records.php";
</script>