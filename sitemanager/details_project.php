<?php  
session_start();  
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

    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="homeSiteManager.php">Site Manager Dashboard</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <!--   <div class="input-group">
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
      <li class="nav-item dropdown no-arrow mx-1">
        <!-- <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <!-- <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      
        <a class="navbar-brand mr-1" href="#"><strong>Welcome:</strong> <?php echo $_SESSION["fullname"]; ?></a>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="settings.php">Settings</a>
       <!--    <a class="dropdown-item" href="#">Activity Log</a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homeSiteManager.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
             <?php
         $con=mysqli_connect("localhost", "root", "", "expense");
        $count_query = "SELECT * FROM project WHERE project_status='ONPROCCESSING' AND sitestatus ='Pending' AND sitemananame='".$_SESSION['email']."' ";
        $query = mysqli_query($con, $count_query);
        $count = mysqli_num_rows($query);
                                           ?>
          <span>(<?php echo $count; ?>) Manage Activities</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Manage Project:</h6>
     <!--      <a class="dropdown-item" href="addProject.php">Add Poject</a> -->
          <a class="dropdown-item " href="viewPendingProject.php">View Pending Project</a>
           <a class="dropdown-item " href="viewProject.php">View Project</a>
        </div>
      </li>



     
<!-- 
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Charges</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Manage Expensis:</h6>
          <a class="dropdown-item" href="addExpensis.php">Add Expensis</a>
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
      </li> -->
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
    <!--   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a> -->
     <!--      <div class="dropdown-divider"></div> -->
        <!--   <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a> -->
     <!--    </div>
      </li> -->
      <!-- <li class="nav-item">
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
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Admin/Expensis Monitoring</li>
        </ol>


        <!-- Icon Cards-->
        <div class="row">
                 <!--  <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">26 New Messages!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div> -->
         <!--  <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Tasks!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div> -->
          <!-- <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div> -->
        <!--   <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div> -->
        </div>

        <!-- Area Chart Example-->
                                     <?php
                                      $conn=mysqli_connect("localhost","root","", "expense") or die(mysql_error());
                                      $ID=$_GET['id'];
                                       ?>
                      
         <div class="col-lg-8">
           <a href="add_expensis_project.php?id=<?php echo $ID?>"> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addexpenses" id="addNewExpenses">  <i class="fa fa-plus-circle fw-fa"></i> Request Expense</button></a>

           <br>   <br>
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
               Project Details</div>

              

              <div class="card-body">
                                      
    
                                          <?php


                                     $query = $conn->query("SELECT * FROM `project` WHERE `project_id` ='$ID'") or die(mysqli_error());
                                     $fetch = $query->fetch_array();

                                     // $project_cost=$fetch['project_cost'];
                                     // $project_expense=$fetch['project_expense'];

                                     //   $restMoney=$project_cost-$project_expense;

                                      ?>
               <table>
                <tr><strong ><td><b>Project Name:</b></td><td><?php echo $fetch['project_name']?></td></strong></tr>
                <tr><strong ><td><b>Start Date:</b></td><td><?php echo $fetch['startdate']?></td></strong></tr>
                <tr><strong ><td><b>End Date:</b></td><td><?php echo $fetch['enddate']?></td></strong></tr>
                <tr><strong ><td><b>Project Cost:</b></td><td><?php echo $fetch['project_cost']?></td></strong></tr>
                <tr><strong ><td><b>Project Total Expenses:</b></td><td><?php echo $fetch['project_expense']?></td></strong></tr>
                <tr><strong ><td><b>Remaining Money : </b></td><td><?php echo $fetch['remaindmoney']?> Frw</td></strong></tr>
                <tr><strong ><td><b>Describe Project: </b></td><td><?php echo $fetch['describeproject']?></td></strong></tr>
                <tr><strong ><td><b>Project Status: </b></td><td><?php echo $fetch['project_status']?></td></strong></tr>
                 <tr><strong ><td><b>Accountent Names: </b></td><td><?php echo $fetch['acountentname']?></td></strong></tr>
                  <tr><strong ><td><b>Site Manager: </b></td><td><?php echo $fetch['sitemananame']?></td></strong></tr>
                   <tr><strong ><td><b>Accountent Status: </b></td><td><?php echo $fetch['accountentstatus']?></td></strong></tr>
                    <tr><strong ><td><b>Site Status: </b></td><td><?php echo $fetch['sitestatus']?></td></strong></tr>
               </table>
              </div>
            <!--   <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
            </div>
          </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Project  Expenses</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Expense Type</th>
                    <th>Item Type</th>
                    <th>Seller Name</th>
                    <th>Amount </th>
                    <th>Requested By</th>
                    <th>Describe On</th>
                     <th>Added By</th>
                    <th>Added On</th>
                      <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                 <?php
                         $conn=mysqli_connect("localhost","root","", "expense") or die(mysql_error());

                         $query = $conn->query("SELECT * FROM `expense` where  project_id='$ID' ") or die(mysqli_error());
                         while($fetch = $query->fetch_array()){

                            

                              

                              
                         ?>
                <tbody>
                  <tr>
                    <td><?php echo $fetch['expense_type']?></td>
                    <td><?php echo $fetch['expense_item']?></td>
                    <td><?php echo $fetch['seller']?></td>
                    <td><?php echo $fetch['expense']?></td>
                    <td><?php echo $fetch['requesteby']?></td>
                    <td><?php echo $fetch['describe_expense']?></td>
                     <td><?php echo $fetch['done_by']?></td>
                    <td><?php echo $fetch['date_given']?></td>
                      <td><?php echo $fetch['donestatus']?></td>
                      <td>

                         <?php if($fetch['donestatus']=='Manager Accepted'):?>
                        <span class="badge badge-warning">Accepted</span>
                         <?php else:?>
                    <a title="Edit" href="editProject_Expense.php?id=<?php echo $fetch['expense_id']?>"  class="btn btn-primary btn-sm  ">  <span class="fa fa-edit fw-fa"></span></a>
                               <?php endif?>
       <!--     <a title="Edit" href="delete_project_expense.php?id=<?php echo $fetch['expense_id']?>"  class="btn btn-danger btn-sm  ">  <span class="fa fa-trash fw-fa"></span></a> -->

                  

                      </td>
                  </tr>
              <?php 
                    }
                    ?>
         </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © by Divine 2021</span>
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
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>

</body>

</html>
<?php
}else{
header("location:../index.php");
}
?>