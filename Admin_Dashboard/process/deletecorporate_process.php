<?php

  include('../include/access/connector.php');

	if(isset($_POST['delete'])){
      $corporate_id = $phdb->real_escape_string($_POST['corporate_id']);

       $sql = $phdb->query("DELETE FROM `corporate_table` WHERE corporate_id = '$corporate_id'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	  echo '<script>alert("Delete Successfully!!!")</script>';
		      echo '<script>window.location = "../Add_corporate.php"</script>';
       }else{
       	  echo '<script>alert("Delete Failed!!!")</script>';
		      echo '<script>window.location = "../Add_corporate.php"</script>';
    }

	}

?>