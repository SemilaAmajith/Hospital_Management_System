<?php
include 'connection.php';
if(isset($_POST['update'])){
    $pidd = $_POST['pid'];
    $name = $_POST['dos'];
    $dob = $_POST['serpro'];
	$gender = $_POST['amount'];
    $contact = $_POST['payst'];
    
    $update = ("UPDATE `invoicetb` SET `dos`='dos',`serpro`='serpro',`billamount`='amount',`status`='payst' WHERE 'pid' = 'pid'";);

 	header("location:patient.php");

	mysqli_query($conn,$update);

    

}
?>
