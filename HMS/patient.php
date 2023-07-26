<!DOCTYPE html>
<html>
<head>
  <title>Patient Information</title>
  <link rel="stylesheet" type="text/css" href="patientstyle.css">
</head>
<body>
  <h1>Patient Information</h1>
  <form method="post" action="patientins.php">
    <h2>Add New Patient</h2>
   <input type="hidden" name="id">
    <label for="name">Name:</label>
    <input class="name" type="text" name="name">
    <label for="dob">Date of Birth:</label>
    <input type="date" class="date" name="dob">
    <label for="gender">Gender:</label>
    <select class="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
    <label for="contact">Contact:</label>
    <input type="text" name="contact">
    <label for="address">Address:</label>
    <textarea class="address" name="address"></textarea>
     <button class="submit" type="submit" name="submit">Submit</button>
  </form>

  <table>
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Invoice</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php
        include 'connection.php';
        $pic = mysqli_query($conn,"SELECT * FROM patientinfo");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>

              <td>$row[id]</td
              <td></td>
              <td>$row[name]</td>
              <td>$row[dob]</td>
              <td>$row[gender]</td>
              <td>$row[contact]</td>
              <td>$row[address]</td>

              <td><button><a href='invoice.php?id=". $row['id']."';? class='link'>Go to invoice</a></button></td>
              <td><button><a href='patientup.php? Id= $row[id]' class='do'>Update</a></button></td>
              <td><button><a href='patientdel.php? Id= $row[id]'class='do'>Delete</a></button></td>
              
            </tr> ";
          }
          ?>
  </tbody>
  </table>
</body>
</html>
