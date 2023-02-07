<?php 

$conn = new mysqli("localhost", "root", "", "expense") or die(mysqli_error());

	$ID=$_GET['id'];
	$conn->query("DELETE FROM `project` WHERE `project_id` = ' $ID'") or die(mysqli_error());
	echo '<script type="text/javascript">alert("Project deleted");window.location=\'viewProject.php\';</script>';
 ?>