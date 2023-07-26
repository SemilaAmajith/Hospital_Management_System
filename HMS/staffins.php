<?php
// include db connection
include 'connection.php';

if(isset($_POST['submit'])){
    $staff_name = $_POST['staff_name'];
    $desi = $_POST['desi'];
    $con = $_POST['contact'];
    $dep = $_POST['dep'];
    $shift = $_POST['shift'];
 

    // insert data

    $insert="INSERT INTO staff_schedules(staff_name,designation,connum,department,shift)VALUES('$staff_name','$desi','$con','$dep','$shift')";
    mysqli_query($conn,$insert);
    header('location:staff.php');

}

?>
