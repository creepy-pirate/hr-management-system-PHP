
  <div class="modal fade" id="modal-overlay">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Corporate</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="process/addcorporate_process.php" method="POST">
        <div class="modal-body">
         <input type="text" name="corporate_name" class="form-control" placeholder="Corporate Name" required="" autocomplete="off">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="corp">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>