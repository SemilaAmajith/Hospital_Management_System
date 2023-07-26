<!DOCTYPE html>
<html>
<head>
  <title>Room Availability Form</title>
  <link rel="stylesheet" type="text/css" href="roomstyle.css">
</head>
<body>

<?php

include 'connection.php';
$ID = $_GET['Id'];
$Record = mysqli_query($conn,"SELECT * FROM  room WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>

  <h2>Room Availability</h2>
 
  <form method="post" action="roomup1.php">
    <input type="hidden" name="id">
    <label>Room Number:</label>
    <input type="text" name="room_no" value="<?php echo $data['room_number'] ?>"> <br>
    <label for="type">Room Type:</label>
    <select name="type" value="<?php echo $data['room_type'] ?>">
      <option value="General">General</option>
      <option value="Private">Private</option>
      <option value="icu">ICU</option>
    </select>
    <label>Availability Status:</label>
    <select name="occu_st" value="<?php echo $data['status'] ?>"><br>>
      <option value="available">Available</option>
      <option value="unavailable">Unavailable</option>
    </select>
    <label> Bed Capacity:</label>
    <input type="text" name="bed" value="<?php echo $data['bed'] ?>">
    <input type="hidden" name="Id"  value="<?php echo $data['id'] ?>">
      <button type="submit" name="update">Update</button>
  </form>
</body>
</html>