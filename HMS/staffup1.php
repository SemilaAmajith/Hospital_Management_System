<?php
include 'connection.php';
if(isset($_POST['update'])){
    $staff_name = $_POST['staff_name'];
    $desi = $_POST['desi'];
    $con = $_POST['contact'];
    $dep = $_POST['dep'];
    $shift = $_POST['shift'];
    $ID = $_POST['Id'];	
 
    
    mysqli_query($conn,"UPDATE staff_schedules SET staff_name='$staff_name',designation='$desi',connum='$con',department='$dep',shift='$shift' WHERE id = '$ID' ");
    header('location:staff.php');


}
?>
