<div class="modal fade" id="modal-view<?php echo $row['employee_id'];?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company ID</label>
                                <input type="text" name="employee_companyid" value="<?php echo $row['employee_companyid'];?>" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="employee_firstname" value="<?php echo $row['employee_firstname'];?>" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="employee_lastname" value="<?php echo $row['employee_lastname'];?>" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" name="employee_middlename" value="<?php echo $row['employee_middlename'];?>" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Branches Date From</label>
                                <input type="date" name="branches_datefrom" value="<?php echo strftime('%Y-%m-%d', strtotime($row['branches_datefrom'])); ?>" class="form-control" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Branches Recent Date</label>
                                <input type="date" name="branches_recentdate" value="<?php echo strftime('%Y-%m-%d', strtotime($row['branches_recentdate'])); ?>" class="form-control" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="Corporate">Department</label>
                            <select class="form-control" name="employee_department" value="<?php echo $row['employee_department'];?>" readonly>
                                <option value="<?php echo $row['employee_department'];?>" hidden><?php echo $row['employee_department'];?></option>

                                <?php
                                       include('include/access/connector.php');
                                        $sql2 = "SELECT  corporate_name  FROM  corporate_table";
                                        $result2 = $phdb->query($sql2);
                                        while ($row2 = $result2->fetch_array()) {
                                            echo "<option value=\"" . htmlspecialchars($row2['corporate_name']) . "\">" . $row2['corporate_name'] . "</option>";
                                        }
                                     ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Branches</label>
                                <select class="form-control" name="employee_branches" value="<?php echo $row['employee_branches'];?>" readonly>
                                    <option value="<?php echo $row['employee_branches'];?>" hidden><?php echo $row['employee_branches'];?></option>
                                    <?php
                                       include('include/access/connector.php');
                                        $sql3 = "SELECT  branches_name  FROM  branches_table";
                                        $result3 = $phdb->query($sql3);
                                        while ($row3 = $result3->fetch_array()) {
                                            echo "<option value=\"" . htmlspecialchars($row3['branches_name']) . "\">" . $row3['branches_name'] . "</option>";
                                        }
                                     ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="employee_position" value="<?php echo $row['employee_position'];?>" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" name="employee_contact" value="<?php echo $row['employee_contact'];?>" maxlength="11" minlength="11" class="form-control" placeholder="" required="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>SSS</label>
                                <input type="text" name="employee_sss" value="<?php echo $row['employee_sss'];?>" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>TIN</label>
                                <input type="text" name="employee_tin" value="<?php echo $row['employee_tin'];?>" class="form-control" placeholder="" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>HDMF/Pag-ibig</label>
                                <input type="text" name="employee_hdmf_pagibig" value="<?php echo $row['employee_hdmf_pagibig'];?>" class="form-control" placeholder=""  autocomplete="off" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>GSIS</label>
                                <input type="text" name="employee_gsis" value="<?php echo $row['employee_gsis'];?>" class="form-control" placeholder=""  autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>File 201 (Softcopy Files)</label>

                                <p style="font-size: 12px;color: red;padding-top:23px"><?php echo substr($row['employee_file201'],34);?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Employee's Picture(Image)</label>
                
                                <p style="font-size: 12px;color: red"> <img src="image_upload/<?php echo $row['employee_image'];?>" style="width: 60px;height: 60px;padding-top: 2px">&nbsp;&nbsp;<?php echo substr($row['employee_image'],35);?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>