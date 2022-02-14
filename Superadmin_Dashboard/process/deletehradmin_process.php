<?php

  include('../include/access/connector.php');

	if(isset($_POST['delete_admin'])){
      $hr_id = $phdb->real_escape_string($_POST['hr_id']);

       $sql = $phdb->query("DELETE FROM `hr_member` WHERE hr_id = '$hr_id'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	  echo '<script>alert("Delete Successfully!!!")</script>';
		      echo '<script>window.location = "../Add_admin.php"</script>';
       }else{
       	  echo '<script>alert("Delete Failed!!!")</script>';
		      echo '<script>window.location = "../Add_admin.php"</script>';
    }

	}

?>