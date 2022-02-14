
  <div class="modal fade" id="modal-delete2<?php echo $row['branches_id'];?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Branches</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form action="process/deletebranches_process.php" method="POST">
        <div class="modal-body">
         <input type="text" name="branches_name" value="<?php echo $row['branches_name'];?>" class="form-control" required="" autocomplete="off" readonly>
        </div>
        <div class="modal-footer justify-content-between">
          <input type="hidden" value="<?php echo $row['branches_id'];?>" name="branches_id">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" name="braches">Delete</button>
        </div>
        </form>
      </div>
    </div>
  </div>