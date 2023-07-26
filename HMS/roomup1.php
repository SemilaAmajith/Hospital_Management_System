<?php
include 'connection.php';
if(isset($_POST['update'])){
    $ID = $_POST['Id'];
    $room_no = $_POST['room_no'];
    $type = $_POST['type'];
    $occu_st = $_POST['occu_st'];
    $bed = $_POST['bed'];
    
    mysqli_query($conn,"UPDATE  room SET room_number='$room_no',room_type='$type',status='$occu_st',bed='$bed' WHERE id = '$ID' ");
    header("location:room.php");


}
?>
