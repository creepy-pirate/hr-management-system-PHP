<?php

  include('../include/access/connector.php');

	if(isset($_POST['hredit_admin'])){
      
       $hr_companyid = $phdb->real_escape_string($_POST['hr_companyid']);
       $hr_firstname = $phdb->real_escape_string($_POST['hr_firstname']);
       $hr_lastname = $phdb->real_escape_string($_POST['hr_lastname']);
       $hr_middlename = $phdb->real_escape_string($_POST['hr_middlename']);
       $hr_contactno = $phdb->real_escape_string($_POST['hr_contactno']);
       $hr_email = $phdb->real_escape_string($_POST['hr_email']);
       $hr_password = $phdb->real_escape_string($_POST['hr_password']);
       $hr_type = $phdb->real_escape_string($_POST['hr_type']);
       $hr_id = $phdb->real_escape_string($_POST['hr_id']);


       $sql = $phdb->query("UPDATE `hr_member` SET `hr_companyid` = '$hr_companyid', `hr_firstname` = '$hr_firstname', `hr_lastname` = '$hr_lastname', `hr_middlename` = '$hr_middlename', `hr_contactno` = '$hr_contactno', `hr_email` = '$hr_email', `hr_password` = '$hr_password', `hr_type` = '$hr_type' WHERE  `hr_id` = '".$hr_id."'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	  echo '<script>alert("Update Successfully!!!")</script>';
		      echo '<script>window.location = "../Add_admin.php"</script>';
       }else{
       	  echo '<script>alert("Update Failed!!!")</script>';
		      echo '<script>window.location = "../Add_admin.php"</script>';
    }

	}

?>