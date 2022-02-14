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
                                 <?php                             
                                   include('include/access/connector.php');                              
                                       $query1 = $phdb->query("select COUNT(*) as corporate_id FROM corporate_table")or die(mysqli_error($phdb));
                                       $row1 = $query1->fetch_array();

                                    ?>  

                                <div class="info-box-content">
                                    <span class="info-box-text">Corporate</span>
                                    <span class="info-box-number"><?php echo htmlentities($row1['corporate_id']);?></span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-code-branch"></i></span>
                                 <?php                             
                                   include('include/access/connector.php');                              
                                       $query2 = $phdb->query("select COUNT(*) as branches_id FROM branches_table")or die(mysqli_error($phdb));
                                       $row2 = $query2->fetch_array();

                                    ?> 
                                <div class="info-box-content">
                                    <span class="info-box-text">Braches</span>
                                    <span class="info-box-number"><?php echo htmlentities($row2['branches_id']);?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-universal-access"></i></span>
                                 <?php                             
                                   include('include/access/connector.php');                              
                                       $query3 = $phdb->query("select COUNT(*) as hr_id FROM hr_member")or die(mysqli_error($phdb));
                                       $row3 = $query3->fetch_array();

                                    ?> 
                                <div class="info-box-content">
                                    <span class="info-box-text">Admin Account</span>
                                    <span class="info-box-number"><?php echo htmlentities($row3['hr_id']);?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
        <footer class="main-footer">
        <strong>DBMS Mini Project &copy; <a href="">Created by Deepak & Yash</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.1
            </div>
        </footer>
      </div>

        <script src="../Admin_Dashboard/plugins/jquery/jquery.min.js"></script>
        <script src="../Admin_Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../Admin_Dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="dist/js/adminlte.js"></script>
        <script src="dist/js/demo.js"></script>


        <script src="../Admin_Dashboard/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="../Admin_Dashboard/plugins/raphael/raphael.min.js"></script>
        <script src="../Admin_Dashboard/plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="../Admin_Dashboard/plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <script src="../Admin_Dashboard/plugins/chart.js/Chart.min.js"></script>
        <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>