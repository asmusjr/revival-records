<?php
    session_start();
    $recordName = $_POST["record_name"];
    $temp = 0;
    foreach ($_SESSION['myRecords'] as $record) {
        if($record == $recordName){
            unset($_SESSION['myRecords'][$temp]);
        }
        $temp++;
    }
?>
<script>
    window.location = "my_records.php";
</script>