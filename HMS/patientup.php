<!DOCTYPE html>
<html>
<head>
  <title>Patient Information</title>
  <link rel="stylesheet" type="text/css" href="patientstyle.css">
</head>
<body>

<?php

include 'connection.php';
$ID = $_GET['Id'];
$Record = mysqli_query($conn,"SELECT * FROM  patientinfo WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>

  <h2>Patient Information</h2>
 
  <form method="post" action="patientup1.php">
    <h2>Add New Patient</h2>
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $data['name']?>">
    <label for="dob">Date of Birth:</label>
    <input type="date" name="dob" value="<?php echo $data['dob']?>">
    <label for="gender">Gender:</label>
    <select name="gender" value="<?php echo $data['gender']?>">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
    <label for="contact">Contact:</label>
    <input type="text" name="contact" value="<?php echo $data['contact']?>"><br>
    <label for="address">Address:</label>
    <input type="text" name="address" value="<?php echo $data['address']?>">
    <input type="hidden" name="Id" value="<?php echo $data['id']?>">
     <button type="submit" name="update">Update</button>
  </form>
</body>
</html>