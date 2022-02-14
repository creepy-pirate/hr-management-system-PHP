<?php

  include('../include/access/connector.php');

	if(isset($_POST['hr_admin'])){
      
       $hr_companyid = $phdb->real_escape_string($_POST['hr_companyid']);
       $hr_firstname = $phdb->real_escape_string($_POST['hr_firstname']);
       $hr_lastname = $phdb->real_escape_string($_POST['hr_lastname']);
       $hr_middlename = $phdb->real_escape_string($_POST['hr_middlename']);
       $hr_contactno = $phdb->real_escape_string($_POST['hr_contactno']);
       $hr_email = $phdb->real_escape_string($_POST['hr_email']);
       $hr_password = $phdb->real_escape_string($_POST['hr_password']);
       $hr_type = $phdb->real_escape_string($_POST['hr_type']);


       $sql = $phdb->query("INSERT INTO `hr_member`(`hr_companyid`, `hr_firstname`, `hr_lastname`, `hr_middlename`, `hr_contactno`, `hr_email`, `hr_password`, `hr_type`) VALUES ('$hr_companyid', '$hr_firstname', '$hr_lastname', '$hr_middlename', '$hr_contactno', '$hr_email', '$hr_password', '$hr_type')")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	  echo '<script>alert("Insert Successfully!!!")</script>';
		      echo '<script>window.location = "../Add_admin.php"</script>';
       }else{
       	  echo '<script>alert("Insert Failed!!!")</script>';
		      echo '<script>window.location = "../Add_admin.php"</script>';
    }

	}

?>