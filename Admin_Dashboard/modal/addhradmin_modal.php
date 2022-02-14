<div class="modal fade" id="modal-overlay">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="process/addhradmin_process.php" method="POST">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                 <label>Company ID</label>
                                <input type="text" name="hr_companyid" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="hr_firstname" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Last Name</label>
                                <input type="text" name="hr_lastname" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Middle Name</label>
                                <input type="text" name="hr_middlename" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                   <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Contact No.</label>
                                <input type="text" name="hr_contactno" minlength="11" maxlength="11" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Position</label>
                                  <select name="hr_type" id="hr_type" class="form-control" required>
                                    <option value="" disabled="disabled" selected="selected">&larr; Select Type &rarr;</option>
                                    <option value="HR Head">&rarr; HR Head</option>
                                    <option value="HR Officer">&rarr; HR Officer</option>
                                    <option value="HR Assistant">&rarr; HR Assistant</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Email Address</label>
                                <input type="email" name="hr_email" class="form-control" placeholder="" required="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label>Password</label>
                                <input type="password" name="hr_password" class="form-control" placeholder="" required="" autocomplete="off" >
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="hr_admin">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>