   <?php include 'header/head.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fa fa-users"></i></span>
                                 <?php                             
                                   include('include/access/connector.php');                              
                                       $query0 = $phdb->query("select COUNT(*) as employee_id FROM employee_table")or die(mysqli_error($phdb));
                                       $row0 = $query0->fetch_array();

                                    ?> 
                                <div class="info-box-content">
                                    <span class="info-box-text">Employee</span>
                                    <span class="info-box-number"><?php echo htmlentities($row0['employee_id']);?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-handshake"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">(Not Authorized)</span>
                                    <span class="info-box-number"></span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-code-branch"></i></span>
                                  <div class="info-box-content">
                                    <span class="info-box-text">(Not Authorized)</span>
                                    <span class="info-box-number"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-universal-access"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">(Not Authorized)</span>
                                    <span class="info-box-number"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="#">Human Resource Information</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.1
            </div>
        </footer>
      </div>

        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="dist/js/adminlte.js"></script>
        <script src="dist/js/demo.js"></script>


        <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="plugins/raphael/raphael.min.js"></script>
        <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <script src="plugins/chart.js/Chart.min.js"></script>
        <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>