<?php 

$conn = new mysqli("localhost", "root", "", "expense") or die(mysqli_error());


$ID=$_GET['id'];

         $query = $conn->query("SELECT * FROM `expense` WHERE `expense_id` = '$ID'") or die(mysqli_error());
          $fetch = $query->fetch_array();
            
              $Costexpense=$fetch['expense'];
              $project_id=$fetch['project_id'];
              


         $query = $conn->query("SELECT * FROM `project` WHERE `project_id` = '$project_id'") or die(mysqli_error());
          $fetch = $query->fetch_array();
            
              $Remaindmoney=$fetch['remaindmoney'];
              $project_expense=$fetch['project_expense'];
              $CostexpenseFinal=$project_expense-$Costexpense;
             
             $recoverdeletedMoneyfirst=$Remaindmoney+$Costexpense;
             


           $conn->query("UPDATE `project` SET `remaindmoney`='$recoverdeletedMoneyfirst', `project_expense`='$CostexpenseFinal'	 WHERE `project_id` = '$project_id'") or die(mysqli_error());


	
	$conn->query("DELETE FROM `expense` WHERE `expense_id` = '$ID'") or die(mysqli_error());
	echo '<script type="text/javascript">alert("Project Expense deleted");window.location=\'viewProject.php\';</script>';
 ?>