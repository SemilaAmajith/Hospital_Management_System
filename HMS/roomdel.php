<?php
include 'connection.php';
 $ID = $_GET['Id'];
mysqli_query($conn,"DELETE FROM room WHERE id = $ID");

header('location:room.php');

?>
