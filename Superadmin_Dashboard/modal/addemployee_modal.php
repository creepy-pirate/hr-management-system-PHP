<div class="modal fade" id="modal-overlay">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="process/addemployee_process.php" method="POST" enctype="multipart/form-data" >
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                 <label>Company ID</label>
                                <input type="text" name="employee_companyid" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="employee_firstname" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Last Name</label>
                                <input type="text" name="employee_lastname" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Middle Name</label>
                                <input type="text" name="employee_middlename" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Branches Date From</label>
                                <input type="date" name="branches_datefrom" class="form-control"  required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Branches Recent Date</label>
                                <input type="date" name="branches_recentdate" class="form-control"  required="" autocomplete="off">
                            </div>
                        </div>
                    </div>

                      <div class="row">
                        <div class="col-md-6">
                                <label for="Corporate">Department</label>
                                <select class="form-control" name="employee_department">
                                <option value="" disabled="disabled" selected="selected">&larr; Select Type &rarr;</option>
                                    <?php
                                       include('include/access/connector.php');
                                        $sql = "SELECT  corporate_name  FROM  corporate_table";
                                        $result = $phdb->query($sql);
                                        while ($row = $result->fetch_array()) {
                                            echo "<option value=\"" . htmlspecialchars($row['corporate_name']) . "\">" . $row['corporate_name'] . "</option>";
                                        }
                                     ?>
                                </select>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Branches</label>
                                <select class="form-control" name="employee_branches">
                                <option value="" disabled="disabled" selected="selected">&larr; Select Type &rarr;</option>
                                    <?php
                                       include('include/access/connector.php');
                                        $sql = "SELECT  branches_name  FROM  branches_table";
                                        $result = $phdb->query($sql);
                                        while ($row = $result->fetch_array()) {
                                            echo "<option value=\"" . htmlspecialchars($row['branches_name']) . "\">" . $row['branches_name'] . "</option>";
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
                                <input type="text" name="employee_position" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Contact Number</label>
                                <input type="text" name="employee_contact" maxlength="11" minlength="11" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>SSS</label>
                                <input type="text" name="employee_sss" class="form-control" placeholder=""  autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>TIN</label>
                                <input type="text" name="employee_tin" class="form-control" placeholder=""  autocomplete="off">
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>HDMF/Pag-ibig</label>
                                <input type="text" name="employee_hdmf_pagibig" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>GSIS</label>
                                <input type="text" name="employee_gsis" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>File 201 (Softcopy Files)</label>
                                <input type="file" name="employee_file201" accept=".docx, .doc, .odp, .pps, .pptx, .ppt, .xlsx, .xls, .pdf, .odt, .csv, .rtf, .tex, .txt, .wpd" class="form-control" placeholder="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Employee's Picture(Image)</label>
                                <input type="file" name="employee_image" accept=".jpg, .jpeg, .png" class="form-control" placeholder=""  autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="emplo">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>