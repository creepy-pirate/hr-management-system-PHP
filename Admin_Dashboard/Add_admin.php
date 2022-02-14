   <?php include 'header/head.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title" style="float: right;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-overlay">
                  Add Admin
                </button></h3>
                <?php include 'modal/addhradmin_modal.php';?>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>HR CompanyID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Contact No.</th>
                    <th>Email Address</th>
                    <th>Password</th>
                    <th>Position</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                       include('include/access/connector.php');
                      $result = $phdb->query("SELECT * FROM `hr_member` ORDER BY hr_id DESC");
                       while ($row = $result->fetch_array()){
                          
                      ?>
                      <tr>
                        <td><?php echo $row['hr_companyid'];?></td>
                        <td><?php echo $row['hr_firstname'];?></td>
                        <td><?php echo $row['hr_lastname'];?></td>
                        <td><?php echo $row['hr_middlename'];?></td>
                        <td><?php echo $row['hr_contactno'];?></td>
                        <td><?php echo $row['hr_email'];?></td>
                        <td><?php echo $row['hr_password'];?></td>
                        <td><?php echo $row['hr_type'];?></td>
                         <td style="width: 10%"><i data-toggle="modal" data-target="#modal-editx<?php echo $row['hr_id'];?>" class="fa fa-edit" style="color: green" title="Edit Employee"></i> | <i data-toggle="modal" data-target="#modal-deletex<?php echo $row['hr_id'];?>" class="fa fa-trash" style="color: red" title="Delete Employee"></i>
                        </td>
                         <?php include 'modal/edithradmin_modal.php';?>
                         <?php include 'modal/deletehradmin_modal.php';?>
                      </tr>

                     <?php  } ?>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="#">Human Resource Information</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 0.1
      </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
