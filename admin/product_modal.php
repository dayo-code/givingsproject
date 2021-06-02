<!-- Add -->
<div class="modal fade" id="addnewprod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add New Product</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="product_add.php" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="name" class="col-sm-1 control-label font-weight-bold">Name</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <label for="category" class="col-sm-1 control-label font-weight-bold">Category</label> &nbsp; &nbsp; &nbsp;

                  <div class="col-sm-4">

                  <select class="form-control" id="category" name="category" required>
                  <option value="" selected>- Select -</option>
                      <?php

                        foreach($cat as $crow){ ?>
                          
                            <option value='<?php echo $crow['cat_id'];?>'> <?php echo $crow['cat_name']?> </option>
                
                  <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="brand" class="col-sm-1 control-label font-weight-bold">Brand</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="brand" name="brand" required>
                  </div>

                  <label for="photo" class="col-sm-1 control-label font-weight-bold">Photo</label> &nbsp; &nbsp; &nbsp;

                  <div class="col-sm-4">
                    <input type="file" id="photo" name="picture">
                  </div>
                </div>

                <div class="form-group row">

                <label for="price" class="col-sm-1 control-label font-weight-bold">Price</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="price" name="price" required>
                  </div>
                  <label for="qty" class="col-sm-1 control-label font-weight-bold">Quantity</label> &nbsp; &nbsp; &nbsp;

                  <div class="col-sm-4">
                    <input type="number" class="form-control" id="qty" name="quantity" required>
                  </div>
        
                  </div>
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor1" name="description" rows="12" cols="100" required></textarea>
                  </div>
                  
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Edit -->
<div class="modal fade" id="editnewprod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Product</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="product_edit.php">
      <input type="hidden" class="editid" id='edid' name="id" value="<?php echo $v['prod_id']; ?>">
     
                <div class="form-group row">
                    <label for="name" class="col-sm-1 control-label font-weight-bold">Name</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <label for="category" class="col-sm-1 control-label font-weight-bold">Category</label> &nbsp; &nbsp; &nbsp;

                  <div class="col-sm-4">
                    <select class="form-control" id="category" name="category" required>
                      <option value="" selected>- Select -</option>
                      <?php

                        foreach($cat as $crow){ ?>
                          
                            <option value='<?php echo $crow['cat_id'];?>'> <?php echo $crow['cat_name']?> </option>
                
                  <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                <label for="brand" class="col-sm-1 control-label font-weight-bold">Brand</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="brand" name="brand" required>
                  </div>

                  <label for="price" class="col-sm-1 control-label font-weight-bold">Price</label>&nbsp; &nbsp; &nbsp;

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="price" name="price" required>
                  </div>

                        </div>
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor1" name="description" rows="10" cols="90" required></textarea>
                  </div>
                  
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
      </div>
      
    </div>
  </div>
</div>



<!-- Photo -->
<div class="modal fade" id="editnewpic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Name goes here</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="product_photo.php" enctype="multipart/form-data">
      <input type="hidden" class="prodid" id='id' name="id" value="<?php echo $v['prod_id']; ?>">
                
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




<!-- View -->
<div class="modal fade" id="viewnewprod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Name also goes here</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      
      </div>
      <div class="modal-body">
      Description goes here
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
      </div>
      
    </div>
  </div>
</div>



<!-- Delete -->
<div class="modal fade" id="deletenewprod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Deleting...</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="product_add.php" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="name" class="col-sm-1 control-label font-weight-bold">Name</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <label for="category" class="col-sm-1 control-label font-weight-bold">Category</label> &nbsp; &nbsp; &nbsp;

                  <div class="col-sm-4">

                  <select class="form-control" id="category" name="category" required>
                  <option value="" selected>- Select -</option>
                      <?php

                        foreach($cat as $crow){ ?>
                          
                            <option value='<?php echo $crow['cat_id'];?>'> <?php echo $crow['cat_name']?> </option>
                
                  <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="price" class="col-sm-1 control-label font-weight-bold">Price</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="price" name="price" required>
                  </div>

                  <label for="photo" class="col-sm-1 control-label font-weight-bold">Photo</label>

                  <div class="col-sm-5">
                    <input type="file" id="photo" name="picture">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="qty" class="col-sm-1 control-label font-weight-bold">Quantity</label>

                  <div class="col-sm-5">
                    <input type="number" class="form-control" id="qty" name="quantity" required>
                  </div>
                  </div>
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor1" name="description" rows="10" cols="90" required></textarea>
                  </div>
                  
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
      </div>
      
    </div>
  </div>
</div>




<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

<script type='text/javascript'>
$('#myModal').modal(options)












