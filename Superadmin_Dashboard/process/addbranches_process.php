<?php

  include('../include/access/connector.php');

	if(isset($_POST['bran'])){
      
      $branches_name = $phdb->real_escape_string($_POST['branches_name']);

       $sql = $phdb->query("INSERT INTO `branches_table`(`branches_name`) VALUES ('$branches_name')")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	  echo '<script>alert("Insert Successfully!!!")</script>';
	    	  echo '<script>window.location = "../Add_braches.php"</script>';
       }else{
       	  echo '<script>alert("Insert Failed!!!")</script>';
	    	  echo '<script>window.location = "../Add_braches.php"</script>';
    }

	}

?>