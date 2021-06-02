
<!-- Add -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add New Category</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="category_add.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label font-weight-bold">Name</label>

                    <div class="col-sm">
                      <input type="text" class="form-control form-control-lg" id="name" name="catname" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
      </div>
      
    </div>
  </div>
</div>



<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Category</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="category_edit.php">
        <input type="hidden" class="catid" id='id' name="id" value="<?php echo $v['cat_id']; ?>">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label font-weight-bold">Name</label>

                    <div class="col-sm">
                      <input type="text" class="form-control form-control-lg" id="name" name="edcatname" value="" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Deleting.....</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="category_delete.php">
                <div class="form-group">
                <input type="hidden" class="catid" name="id">
                <div class="text-center">
                    <p>DELETE CATEGORY</p>
                    <h2 class="font-weight-bold catname"></h2>
                </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="add"><i class="fa fa-trash"></i> Delete</button>
              </form>
      </div>
      
    </div>
  </div>
</div>



<!-- Photo -->
<div class="modal fade" id="editcatpic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Some goes here</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="category_photo.php" enctype="multipart/form-data">
      <input type="hidden" class="id" id="eid" name="id" value="<?php echo $v['cat_id']; ?>">
                
                <div class="form-group row ml-5">

                  <label for="photo" class="col-sm-1 control-label font-weight-bold">Photo</label>&nbsp;&nbsp;&nbsp;

                  <div class="col-sm-5">
                    <input type="file" id="photo" name="picture">
                  </div>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
      </div>
      
    </div>
  </div>
</div>


<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

<script type='text/javascript'>
$('#myModal').modal(options)