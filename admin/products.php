<?php
include("user.php");
$obj = new Admin;

if (!isset($_SESSION['userid'])) {
  header('location:index.php');
}

$cate = $obj->get_products();

$cat = $obj->get_category();

include "includehome.php";
?>

<div class="container-fluid" 
style="background-color:#ecf0f5;">

<section class="content-header">
      <h2 class="pt-3 mb-3">
        Products
      </h2>

    </section>

<div class="content-wrapper bg-white mt-2 pl-2 shadow-lg">
    <!-- Content Header (Page header) -->
    
<!-- Button trigger modal -->
<button type="button" class="mt-2 btn btn-sm btn-primary" data-toggle="modal" data-target="#addnewprod">
<i class="fa fa-plus"></i>  New
</button>
<div class="row pr-2 py-2">
<div class="col-sm-4">
<form class="form-inline">
                  <div class="form-group">
                    <label>Category:&nbsp; </label>
                    <select class="form-control input-sm" id="select_category">
                      <option value="0">ALL</option>
                      <?php

                        foreach($cat as $crow){ ?>
                          
                            <option value='<?php $crow['cat_id'];?>'> <?php echo $crow['cat_name']?> </option>
                
                  <?php } ?>

                  
                    </select>
                    
                  </div>
                </form>
</div>
<div class="col-sm-8">
<form action="" method="GET">
  <div class="form-inline justify-content-end">
  <label for="searchs">Search: &nbsp;</label>
    <input type="text" name="searchs" id="searchs" class="form-control">
  </div>
  </form>
</div>

</div>
<!-- <div class="box-header with-border">
              <a href="#exapleModal" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div> -->


<div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <th>Product Name</th>
                  <th >Brand</th>
                  <th>Photo</th>
                  <th>Description</th>
                  <th>Price</th>
                 
                  <th>Tools</th>
                </thead>
                <tbody>
    
        <tr>
        <?php foreach($cate as $v) { ?>  

                            <td><?php echo $v['prod_name']; ?></td>
                            <td><?php echo $v['brand_name']; ?></td>
                            <td>
                            <img src='<?php echo "../images/".$v['prod_picture']; ?>' height='30px' width='30px'>
                              <span class='pull-right'><a href='#edit_photo' class='photo' data-target="#editnewpic" data-toggle='modal' data-id='<?php echo $v['prod_id']; ?>'><i class='fa fa-edit'></i></a></span>
                              
                          </td>
                          <td>
                          <button type='button' class='btn btn-info btn-sm edit btn-flat' data-toggle="modal" data-target="#viewnewprod" data-id='<?php echo $v['prod_id'] ?>'><i class='fa fa-search'></i> View</button>
                          </td>
                        <td>&#8358; <?php echo number_format($v['prod_price'], 2);?> </td>
                            <td>
                              <button type='button' class='btn btn-success btn-sm edit btn-flat' data-toggle="modal" data-target="#editnewprod" data-id='<?php echo $v['prod_id'] ?>'><i class='fa fa-edit'></i> Edit</button>

                              <button class='btn btn-danger btn-sm delete btn-flat'  data-toggle="modal" data-target="#deletenewprod" data-id='<?php $v['prod_id'] ?>'><i class='fa fa-trash'></i> Delete</button>
                            </td>
                          </tr>

    <?php   } ?>

                </tbody>
              </table>
              <nav aria-label="" class="px-3">
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>





            </div>



            </div>
            </div>
      <?php include "footer.php"; ?>

<?php include "product_modal.php"; ?>



            

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

<script type="text/javascript"> 

//triggered when modal is about to be shown
$('#editnewpic').on('show.bs.modal', function(e) {

    //get data-id attribute of the clicked element
    var userid = $(e.relatedTarget).data('id');
    $('#id').val(userid)
    //make an ajax call to receive an array based on userid, that is you can now pass the userid to an ajax. let's say the ajax returns t     

    // $(e.currentTarget).find('.modal-body').html(); //displays t inside the div with class modal-body
    // $(e.currentTarget).find('.modal-title').html("Details for User"+ userid); //displays this in the div with class modal-title
    
});

$('#editnewprod').on('show.bs.modal', function(e) {

    var userid = $(e.relatedTarget).data('id');
    $('#edid').val(userid)
});


$("#select_category").on('change',function(){
    var select_category=$("#select_category").val();

$.ajax('./ajax/get_lgas.php',{
        type:'post',
        data:{'select_category':select_category},
        success:function(response){
            var result=JSON.parse(response);
            var options='';
            $.each(result, function(key, val){
                options=options+"<option value='"+key+"'>"+val+"</option>";
            });
            $("#lga_id").html(options);
        },
        error: function(){
            alert('There was error. Please retry')
        }
       });
      })

</script>
