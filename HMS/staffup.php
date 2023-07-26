<!DOCTYPE html>
<html>
<head>
  <title>Staff Scheduling</title>
  <link rel="stylesheet" type="text/css" href="staffstyle.css">
</head>
<body>

<?php

include 'connection.php';
$ID = $_GET['id'];
$Record = mysqli_query($conn,"SELECT * FROM staff_schedules WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>
<h1>Staff Scheduling</h1>
    <form method="post" action="staffup1.php">
      <h2>Add Staff Schedule</h2>
       
      <div class="mb-3">
        <label for="staff_name" class="form-label">Staff Name:</label>
        <input type="text" name="staff_name" value="<?php echo $data['staff_name'] ?>">
        <div class="mb-3">
        <label for="desi" class="desi">Designation:</label>
        <input type="text" name="desi" value="<?php echo $data['designation'] ?>">
      <div class="mb-3">
        <label for="contact" class="form-label">Contact Number:</label>
        <input type="text" name="contact" value="<?php echo $data['connum'] ?>">
      </div>
      <div class="mb-3">
        <label for="dep" class="form-label">Department:</label>
        <input type="text" name="dep" value="<?php echo $data['department'] ?>">
      </div>
      <div class="mb-3">
        <label for="shift" class="form-label">Shift:</label>
        <select class="form-control" name="shift" value="<?php echo $data['shift'] ?>">
          <option value="Morning">Morning</option>
          <option value="Afternoon">Afternoon</option>
          <option value="Night">Night</option>
        </select>
      </div>
      <input type="hidden" name="Id" value="<?php echo $data['id'] ?>">
      <button type="submit" name="update">Update</button>
    </form>

</body>
</html>