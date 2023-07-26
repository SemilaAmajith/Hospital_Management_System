<!DOCTYPE html>
<html>
<head>
  <title>Staff Information</title>
  <link rel="stylesheet" href="staffstyle.css">
</head>
<body>
  <div class="container">
    <h1>Staff Information</h1>
    <form method="post" action="staffins.php">
      <h3>Add Staff Information</h3>
       <input type="hidden" name="id">
      <div class="mb-3">
        <label for="staff_name" class="form-label">Staff Name:</label>
        <input type="text" class="form-control" id="staff_name" name="staff_name" >
      </div>
      <div>
        <label for="staff_name" class="form-label">Designation:</label>
        <input type="text" class="form-control" id="desi" name="desi" >
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Contact Number:</label>
        <input type="text" class="form-control" id="contact" name="contact" >
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Department:</label>
        <input type="text" class="form-control" id="dep" name="dep" >
      </div>
      <div class="mb-3">
        <label for="shift" class="form-label">Shift:</label>
        <select class="form-control" id="shift" name="shift" >
          <option value="Morning">Morning</option>
          <option value="Afternoon">Afternoon</option>
          <option value="Night">Night</option>
        </select>
      </div>
      <button type="submit" name="submit" class="btn">Submit</button>
    </form>

    <table>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Staff Name</th>
        <th scope="col">Designation</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Department</th>
        <th scope="col">Shift</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody>
      <?php
    include 'connection.php';
        $pic = mysqli_query($conn,"SELECT * FROM staff_schedules");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[staff_name]</td>
                <td>$row[designation]</td>
                <td>$row[connum]</td>
                <td>$row[department]</td>
                <td>$row[shift]</td>
               
                <td><a href='staffdel.php? Id= $row[id]' class = 'btn1'>Delete</a></td>
                <td><a href='staffup.php? id= $row[id]' class = 'btn1'>Update</a></td>
                <td></td>
                
                
                
            </tr>
            ";
        }
        ?>
    </tbody>
  </table>

  </div>
</body>
</html>
