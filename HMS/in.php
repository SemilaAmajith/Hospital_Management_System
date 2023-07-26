<!DOCTYPE html>
<html>
<head>
  <title>Patient Invoice</title>
  <link rel="stylesheet" type="text/css" href="patientstyle.css">
</head>
<body>
  <h1>Patient Invoice</h1>
  <table>
    <thead>
    <tr>
      <th scope="col">Patient ID</th>
      <th scope="col">Invoice ID</th>
      <th scope="col">Date of Services</th>
      <th scope="col">Services Provided</th>
      <th scope="col">Bill Amount</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php
        include 'connection.php';
        $pic = mysqli_query($conn,"SELECT * FROM invoicetb");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>

              <td>$row[invoiceid]</td
              <td></td>
              <td>$row[dos]</td>
              <td>$row[serpro]</td>
              <td>$row[billamount]</td>
              <td>$row[status]</td>
              
              <td><button><a href='patientup.php? Id= $row[invoiceid]'>Update</a></button></td>
              <td><button><a href='patientdel.php? Id= $row[invoiceid]'>Delete</a></button></td>
              
            </tr> ";
          }
          ?>
  </tbody>
  </table>
</body>
</html>