<?php
include 'connection.php';
 $ID = $_GET['Id'];
mysqli_query($conn,"DELETE FROM  staff_schedules WHERE id = $ID");

header('location:staff.php');

?>
