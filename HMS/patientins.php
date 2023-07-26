<?php
// include db connection
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $dob = $_POST['dob'];
	$gender = $_POST['gender'];
    $contact = $_POST['contact'];
 	$adress = $_POST['address'];
    $medical = $_POST['medical_history'];
  

    // insert data

    $insert="INSERT INTO patientinfo(name,dob,gender,contact,address,medical_history)VALUES('$name','$dob','$gender','$contact','$adress','$medical')";
    mysqli_query($conn,$insert);
    //echo "success";
    header('location:patient.php');

}

?>
