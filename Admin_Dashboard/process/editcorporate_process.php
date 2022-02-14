<?php

  include('../include/access/connector.php');

	if(isset($_POST['update'])){
      $corporate_id = $phdb->real_escape_string($_POST['corporate_id']);
      $corporate_name = $phdb->real_escape_string($_POST['corporate_name']);

       $sql = $phdb->query("UPDATE `corporate_table`  SET `corporate_name` = '$corporate_name' WHERE corporate_id = '$corporate_id'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	  echo '<script>alert("Update Successfully!!!")</script>';
		      echo '<script>window.location = "../Add_corporate.php"</script>';
       }else{
       	  echo '<script>alert("Update Failed!!!")</script>';
		      echo '<script>window.location = "../Add_corporate.php"</script>';
    }

	}

?>