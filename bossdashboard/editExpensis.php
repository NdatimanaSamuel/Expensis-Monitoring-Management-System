<?php  
session_start(); 
error_reporting(0) ;
if($_SESSION['email']!=""){
?> 

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Expensis Monitoring Management System Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="home.php">Admin Dashboard</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
     <!--  <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div> -->
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     <!--  <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    <!--   <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="home.php">Settings</a><!-- 
          <a class="dropdown-item" href="#">Activity Log</a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>


       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Activities</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Manage Project:</h6>
          <a class="dropdown-item " href="addProject.php">Add Project</a>
          <a class="dropdown-item " href="viewProject.php">View Project</a>
        </div>
      </li>

   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
             <?php
         $con=mysqli_connect("localhost", "root", "", "expense");
        $count_query = "SELECT * FROM expense WHERE donestatus  ='Accountent Accepted'  ";
        $query = mysqli_query($con, $count_query);
        $count = mysqli_num_rows($query);
                                           ?>
          <span>(<?php echo $count; ?>) Manage Request</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Manage Project:</h6>
     <!--      <a class="dropdown-item" href="addProject.php">Add Poject</a> -->
          <a class="dropdown-item " href="viewPendingRequest.php">View Pending Request</a>
           <a class="dropdown-item " href="viewAcceeptedExpenseProject.php">View Accepted Expense</a>
        </div>
      </li>


       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Charges</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Manage Expensis:</h6>
          <a class="dropdown-item active" href="addExpensis.php">Add Expensis</a>
          <a class="dropdown-item " href="viewExpensis.php">View Expensis</a>
          
        </div>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Supplier</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Manage Supplier:</h6>
          <a class="dropdown-item" href="addSeller.php">Add Supplier</a>
          <a class="dropdown-item " href="viewSeller.php">View Supplier</a>
          
        </div>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Manage Users</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Manage Users:</h6>
          <a class="dropdown-item" href="addUser.php">Add User</a>
          <a class="dropdown-item " href="viewUser.php">View User</a>
          
        </div>
      </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Reports</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Manage Reports:</h6>
          <a class="dropdown-item" href="dayReport.php">Day Report</a>
          <a class="dropdown-item " href="monthReport.php">Month Report</a>
          
        </div>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
        
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="home.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Create New Project</li>
        </ol>

        <!-- Page Content -->
        <h3>Add New Project</h3>
        <hr>
   <div class="container">
       <?php
                                      $conn=mysqli_connect("localhost","root","", "expense") or die(mysql_error());
                                      $ID=$_GET['id'];
                                       ?>
    
                                          <?php


                                     $query = $conn->query("SELECT * FROM `common_expense` WHERE `common_id` ='$ID'") or die(mysqli_error());
                                     $fetch = $query->fetch_array();
                                      ?>

  <div class="card card-register mx-auto mt-2">
    <div class="card-header">Modify Expense </div>
    <div class="card-body">  
 <form  method="POST">
          <div class="form-group">
           <div class="form-row">
                  <div class="col-md">
                <label for="category">Category</label>

                   <input class="form-control input-sm" id="category" name="category" placeholder=
                      "Category" type="text" value="Expenses" readonly>
                </div>
              </div>
            </div>

             <div class="form-group">
                    <div class="form-row">
                        <div class="col-md">
                      <label  for="item">Expense Name</label>

                           <input class="form-control input-sm" id="item" name="item" value="<?php echo $fetch['listname']?>" placeholder=
                            "Expense Name" type="text"  required>
                      </div>
                    </div>
                  </div>
                  
                   
             
            <button class="btn btn-primary btn-block" name="update_expensis" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Update Expense</button>

              
        </form>
             </div>
    </div>
  </div>
 
        

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright ?? by Divine 2021</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

</body>

</html>

 <?php 
                    
$db=mysqli_connect("localhost","root","","expense");



if (isset($_POST['update_expensis'])) {


  $ExpenseName=$_POST['item'];
   
   

  if (!preg_match("/^[a-zA-Z\s]+$/",$ExpenseName)) {
  echo"<script>alert('ExpenseName Must Be Character');</script>"; 
 exit();
 }


else
    {




$conn->query("UPDATE `common_expense` SET   `listname`='$ExpenseName' WHERE `common_id` = '$ID'") or die(mysqli_error());
echo " <script>window.alert('successful Expensis Updated');window.location='viewExpensis.php'</script>";

}

}

    
                     ?>

<?php
}else{
header("location:../index.php");
}
?>

