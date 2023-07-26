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
$Record = mysqli_query($conn,"SELECT * FROM  invoicetb WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>

  <h1>Patient Invoice</h1>
    <form method="post" action="invoiceins.php">
        <input type="hidden" name="pid" value="<?=$PID;?>">
        <input type="hidden" name="id">
        <label for="dos">Date of service:</label>
        <input type="text" name="dos" value="<?php echo $data['dos'] ?>">
        <label for="serpro">Services Provided:</label>
        <input type="text" name="serpro" value="<?php echo $data['serpro'] ?>">
        <label for="amount">Bill Amount:</label>
        <input type="text" name="amount" value="<?php echo $data['billamount'] ?>">
        <label for="payst">Payment status:</label>
        <select name="payst" value="<?php echo $data['status'] ?>">
            <option value="paid">Paid</option>
            <option value="female">Pending</option>
        </select>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>