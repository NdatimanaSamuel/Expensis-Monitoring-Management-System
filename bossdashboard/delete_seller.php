<?php 

$conn = new mysqli("localhost", "root", "", "expense") or die(mysqli_error());

	$ID=$_GET['id'];
	$conn->query("DELETE FROM `seller` WHERE `seller_id` = ' $ID'") or die(mysqli_error());
	echo '<script type="text/javascript">alert("Seller deleted");window.location=\'viewSeller.php\';</script>';
 ?>