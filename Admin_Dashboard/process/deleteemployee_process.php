<?php

  include('../include/access/connector.php');

	if(isset($_POST['delete3'])){
      $employee_id = $phdb->real_escape_string($_POST['employee_id']);

       $sql = $phdb->query("DELETE FROM `employee_table` WHERE employee_id = '$employee_id'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	  echo '<script>alert("Delete Successfully!!!")</script>';
		      echo '<script>window.location = "../Add_employee.php"</script>';
       }else{
       	  echo '<script>alert("Delete Failed!!!")</script>';
		      echo '<script>window.location = "../Add_employee.php"</script>';
    }

	}

?>