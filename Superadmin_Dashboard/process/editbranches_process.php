<?php

  include('../include/access/connector.php');

  if(isset($_POST['update2'])){
      $branches_id = $phdb->real_escape_string($_POST['branches_id']);
      $branches_name = $phdb->real_escape_string($_POST['branches_name']);

       $sql = $phdb->query("UPDATE `branches_table`  SET `branches_name` = '$branches_name' WHERE branches_id = '$branches_id'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
          echo '<script>alert("Update Successfully!!!")</script>';
          echo '<script>window.location = "../Add_braches.php"</script>';
       }else{
          echo '<script>alert("Update Failed!!!")</script>';
          echo '<script>window.location = "../Add_braches.php"</script>';
    }

  }

?>