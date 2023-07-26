<?php
include 'connection.php';
if(isset($_POST['update'])){
    $ID = $_POST['Id'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
	$gender = $_POST['gender'];
    $contact = $_POST['contact'];
 	$adress = $_POST['address'];
    
    mysqli_query($conn,"UPDATE patientinfo SET name='$name',dob='$dob',gender='$gender',contact='$contact',address='$adress' WHERE id = '$ID' ");
    header("location:patient.php");


}
?>
