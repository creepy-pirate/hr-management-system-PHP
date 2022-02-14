<?php

  include('../include/access/connector.php');

	if(isset($_POST['braches'])){
      $branches_id = $phdb->real_escape_string($_POST['branches_id']);

       $sql = $phdb->query("DELETE FROM `branches_table` WHERE branches_id = '$branches_id'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	  echo '<script>alert("Delete Successfully!!!")</script>';
		      echo '<script>window.location = "../Add_braches.php"</script>';
       }else{
       	  echo '<script>alert("Delete Failed!!!")</script>';
		      echo '<script>window.location = "../Add_braches.php"</script>';
    }

	}

?>