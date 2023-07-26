<!DOCTYPE html>
<html>
<head>
  <title>Room Availability Form</title>
  <link rel="stylesheet" type="text/css" href="roomstyle.css">
</head>
<body>
  <h2>Room Availability Form</h2>
 
  <form method="post" action="roomins.php">
    <input type="hidden" name="id">
    <label>Room Number:</label>
    <input type="text" name="room_no" class="roomno"><br>
    <label for="type">Room Type:</label>
    <select name="type" class="roomtype">
      <option value="General">General</option>
      <option value="Private">Private</option>
      <option value="icu">ICU</option>
    </select><br>
    <br><label>Availability Status:</label>
    <select name="occu_st" class="as">
      <option value="available">Available</option>
      <option value="unavailable">Unavailable</option>
    </select>
    <br><label class="bedc"> Bed Capacity:</label>
    <input type="text" name="bed" class="bed">
      <button type="submit" name="submit">Submit</button>
  </form>

  <table>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Room Number</th>
        <th scope="col">Room Type</th>
        <th scope="col">Status</th>
        <th scope="col">Bed Capacity</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody>
      <?php
    include 'connection.php';
        $pic = mysqli_query($conn,"SELECT * FROM room");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[room_number]</td>
                <td>$row[room_type]</td>
                <td>$row[status]</td>
                <td>$row[bed]</td>
                <br>
                <td><a href='roomdel.php? Id= $row[id]' class = 'btm'>Delete</a></td>
                <td><a href='roomup.php? Id= $row[id]' class = 'btm'>Update</a></td>
                <td></td>
                
                
                
            </tr>
            ";
        }
        ?>
    </tbody>
  </table>

</body>
</html>