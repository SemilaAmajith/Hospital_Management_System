<?php
include 'connection.php';
 $ID = $_GET['Id'];
mysqli_query($conn,"DELETE FROM patientinfo WHERE id = $ID");

header('location:patient.php');

?>
