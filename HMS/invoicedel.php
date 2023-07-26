<?php
include 'connection.php';
if (isset($_POST['delete'])) {
 $ID = $_GET['pid'];

mysqli_query($conn,"DELETE FROM `invoicetb` WHERE $ID");

header('location:invoice.php');
}
?>
