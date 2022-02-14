
  <div class="modal fade" id="modal-delete3<?php echo $row['employee_id'];?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form action="process/deleteemployee_process.php" method="POST">
        <div class="modal-body">
         <input type="text"  value="<?php echo ucwords($row['employee_firstname'].' '.$row['employee_lastname']);?>" class="form-control" required="" autocomplete="off" readonly>
        </div>
        <div class="modal-footer justify-content-between">
          <input type="hidden" value="<?php echo $row['employee_id'];?>" name="employee_id">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" name="delete3">Delete</button>
        </div>
        </form>
      </div>
    </div>
  </div>