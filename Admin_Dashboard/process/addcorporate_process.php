<?php

  include('../include/access/connector.php');

	if(isset($_POST['corp'])){
      
      $corporate_name = $phdb->real_escape_string($_POST['corporate_name']);

       $sql = $phdb->query("INSERT INTO `corporate_table`(`corporate_name`) VALUES ('$corporate_name')")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	  echo '<script>alert("Insert Successfully!!!")</script>';
		      echo '<script>window.location = "../Add_corporate.php"</script>';
       }else{
       	  echo '<script>alert("Insert Failed!!!")</script>';
		      echo '<script>window.location = "../Add_corporate.php"</script>';
    }

	}

?>