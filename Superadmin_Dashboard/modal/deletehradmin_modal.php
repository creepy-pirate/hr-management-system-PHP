
  <div class="modal fade" id="modal-deletex<?php echo $row['hr_id'];?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Admin</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form action="process/deletehradmin_process.php" method="POST">
        <div class="modal-body">
         <input type="text"  value="<?php echo ucwords($row['hr_firstname'].' '.$row['hr_lastname']);?>" class="form-control" required="" autocomplete="off" readonly>
        </div>
        <div class="modal-footer justify-content-between">
          <input type="hidden" value="<?php echo $row['hr_id'];?>" name="hr_id">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" name="delete_admin">Delete</button>
        </div>
        </form>
      </div>
    </div>
  </div>