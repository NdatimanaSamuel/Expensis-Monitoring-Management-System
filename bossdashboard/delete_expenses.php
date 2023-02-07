<?php 

$conn = new mysqli("localhost", "root", "", "expense") or die(mysqli_error());

	$ID=$_GET['id'];
	$conn->query("DELETE FROM `common_expense` WHERE `common_id` = ' $ID'") or die(mysqli_error());
	echo '<script type="text/javascript">alert("Expense deleted");window.location=\'viewExpensis.php\';</script>';
 ?>