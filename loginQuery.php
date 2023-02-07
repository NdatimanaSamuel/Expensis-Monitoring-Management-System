
<?php
 $username=null;
  $password=null;
  $checkaccount_error=null;

    session_start();
    if(ISSET($_POST['login'])){

        $username = $_POST['email'];
        $password = $_POST['password'];

        $conn = new mysqli("localhost", "root", "", "expense") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `account` WHERE `email` = '$username' && `password` = '$password'") or die(mysqli_error());
        $fetch = $query->fetch_array();
        $valid = $query->num_rows;
        $section = $fetch['type'];   

            if($valid > 0){
                if($section == "Admin"){

                    $_SESSION['user_id'] = $fetch['user_id'];
                         $_SESSION['email'] = $fetch['email'];
                     $_SESSION['fullname'] = $fetch['fullname'];
                    header("location:bossdashboard/home.php");
                }
              
                if($section == "Site Manager"){
                     $_SESSION['user_id'] = $fetch['user_id'];
                          $_SESSION['email'] = $fetch['email'];
                     $_SESSION['fullname'] = $fetch['fullname'];
                    header("location:sitemanager/homeSiteManager.php");
                }

                    if($section == "Accountent"){
                     $_SESSION['user_id'] = $fetch['user_id'];
                       $_SESSION['email'] = $fetch['email'];
                     $_SESSION['fullname'] = $fetch['fullname'];
                    header("location:accountentmanager/homeAccountent.php");
                }
              
            }else{
                 $checkaccount_error="Account Does Not Exist Try Again!";
                // echo "<script>alert('Account Does Not Exist!')</script>";
                // echo "<script>window.location = 'index.php'</script>";
            }
                        
        
        }
       
    


