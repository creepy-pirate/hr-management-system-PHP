<?php

include('../include/access/connector.php');

if (isset($_POST['login_hr'])) {
    session_start();
    $hr_email = $_POST['hr_email'];
    $hr_password   = $_POST['hr_password'];
    $hr_type  = $_POST['hr_type'];
    
          ////////////////////////////////////////////////////////HR Head////////////////////////////////////////////////////////
    if ($hr_type == "HR Head") {
        $query  = $phdb->query("SELECT * FROM hr_member WHERE hr_email='$hr_email' AND hr_password='$hr_password' AND hr_type='HR Head'");
        $row     = mysqli_fetch_array($query);
        $num_row = mysqli_num_rows($query);
        if ($num_row > 0) {
            echo "<script type='text/javascript'>alert('Login Successfully!!');document.location = '../Superadmin_Dashboard/Superadmin_Dashboard.php'</script>";
            
            $_SESSION['hr_id'] = $row['hr_id'];
        } else {
            echo "<script type='text/javascript'>alert('Invalid Email or Password,Please try again!');document.location = '../index.html'</script>";
        }

        ////////////////////////////////////////////////////////////HR Officer////////////////////////////////////////////////////
        
	    } else if ($hr_type == "HR Officer") {
	        $query   = $phdb->query("SELECT * FROM hr_member WHERE hr_email='$hr_email' AND hr_password='$hr_password' AND hr_type='HR Officer'");
	        $row     = mysqli_fetch_array($query);
	        $num_row = mysqli_num_rows($query);
	        if ($num_row > 0) {
	            
	            echo "<script type='text/javascript'>alert('Login Successfully!!');document.location = '../Admin_Dashboard/Admin_Dashboard.php'</script>";
	           $_SESSION['hr_id'] = $row['hr_id'];
	        } else {
	            
	            echo "<script type='text/javascript'>alert('Invalid Email or Password,Please try again!');document.location = '../index.html'</script>";
	        }
	    
	   ////////////////////////////////////////////////////////////HR Assistant//////////////////////////////////////////////////////

     } else if ($hr_type == "HR Assistant") {
        $query   = $phdb->query("SELECT * FROM hr_member WHERE hr_email='$hr_email' AND hr_password='$hr_password' AND hr_type='HR Assistant'");
        $row     = mysqli_fetch_array($query);
        $num_row = mysqli_num_rows($query);
        if ($num_row > 0) {
            
            echo "<script type='text/javascript'>alert('Login Successfully!!');document.location = '../Admin_Dashboard/Admin_Dashboard.php'</script>";
           $_SESSION['hr_id'] = $row['hr_id'];
        } else {
            
            echo "<script type='text/javascript'>alert('Invalid Email or Password,Please try again!');document.location = '../index.html'</script>";
        }
    }
        
}
?>
