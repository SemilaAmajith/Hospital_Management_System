<?php
// include db connection
include 'connection.php';

if(isset($_POST['submit'])){
    $room_no = $_POST['room_no'];
    $type = $_POST['type'];
    $occu_st = $_POST['occu_st'];
    $bed = $_POST['bed'];
 

    // insert data

    $insert="INSERT INTO room(room_number,room_type,status,bed)VALUES('$room_no','$type','$occu_st','$bed')";
    mysqli_query($conn,$insert);
    header('location:room.php');

}

?>
