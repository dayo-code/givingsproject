<?php

include "admin/user.php";
$obj = new Admin;
$cate = $obj->get_category();

$prod =$obj->get_products();
require 'header.php';
?>

<!--Carousel--> 

		<div class="row">
			<div class="col">
		

				<div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
  <div class="carousel-inner text-white">
    <div class="carousel-item active act" data-interval="10000">
      <div class="text-center d-none d-md-block txt" style="background-color:rgba(0,0,0,0.7); height:700px">
        <p class="p-2">Limited Time: Online Only!</p>
        <h1 class="p-2" style="font-weight:bold">FINAL <br>CLEARANCE</h1>
        <h4 class="p-2">Take 20% off 'Sale Must Haves'</h4>
        <button class="btn btn-lg btn-light p-2">SHOP NOW!</button>
      </div>
    </div>
    <div class="carousel-item act2" data-interval="10000">
      <div class="text-center d-none d-md-block txt" style="background-color:rgba(0,0,0,0.7); height:700px">
        <p class="p-2">Limited Time: Online Only!</p>
        <h1 class="p-2" style="font-weight:bold">FINAL <br>CLEARANCE</h1>
        <h4 class="p-2">Take 20% off 'Sale Must Haves'</h4>
        <button class="btn btn-lg btn-light p-2">SHOP NOW!</button>
      </div>
    </div>
    <div class="carousel-item act3" data-interval="10000">
      <div class="text-center d-none d-md-block txt" style="background-color:rgba(0,0,0,0.7); height:700px">
        <p class="p-2">Limited Time: Online Only!</p>
        <h1 class="p-2" style="font-weight:bold">FINAL <br>CLEARANCE</h1>
        <h4 class="p-2">Take 20% off 'Sale Must Haves'</h4>
        <button class="btn btn-lg btn-light p-2">SHOP NOW!</button>
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			</div>
		</div>
  </div>

	<!--Categories-->
  <div class="row my-sm-5 mx-sm-5">
<?php 
$i = 1;
foreach ($cate as $cat) { ?>
			<div class="col-sm-4 p-sm-3" style="background-image: url('<?php echo "images/".$cat['cat_pic']; ?>');background-attachment:scroll;
	background-size:cover;
	width: 100%;
	height: 300px;">
				<div class="text-dark" style="margin-top:220px; background-color:rgba(255,255,255,0.5);">
					<p class="p-2 text-center"><b><?php echo $cat['cat_name'];?></b></p>
				</div>
  </div>
  <?php 
      if(++$i > 3) break;
}
  
  ?>
  </div>
		

	<!--Cats-->

		<div class="row">
			<div class="text-center" style="margin:auto;font-size:17px">
				<a href="" class="px-4 text-muted text-decoration-none bbb"><b>New Arrivals</b></a>
        <a href="" class="pr-4 text-muted text-decoration-none"><b>Special Deals</b></a>
        <a href="" class="text-muted text-decoration-none"><b>Featured Products</b></a>
			</div>
			
		</div>

<!-- Shop  -->



<div class="row mb-5 mx-5">

<?php 
  $i = 1;
  foreach ($prod as $pro) { ?>
    <form class="product-form" action="" method="POST">
  <div class="col pl-sm-2 pt-5">

          <a href="product.php?id=<?php echo $pro['prod_id'];?>"><img src="<?php echo "images/".$pro['prod_picture']; ?>" alt="Men" class="shadow zoom"></a><br>
          <div class="pt-3 text-muted" style="font-size:13px">
          <span><?php echo $pro['brand_name']; ?></span>
        </div>
        <div class="py-1" style="font-size:13px";>
          <span><?php echo $pro['prod_name']; ?></span>
        </div>
        <div class="pb-1" style="font-size:15px; font-weight: bold">
          <span>&#8358; <?php echo number_format($pro['prod_price'], 2);?></span>
        </div>
        <div class="py-1">
          <div class="we bg-primary"></div>
          <div class="we bg-warning"></div>
          <div class="we"></div>
        </div>

        <div style="font-size: 12px; cursor: pointer;">
            <div class="wer">40</div>
            <div class="wer">30</div>
            <div class="wer">28</div>
            <div class="wer">28</div>
          </div>
        <input type="hidden" name="prod_id" value="<?php echo $pro['prod_id']; ?>">
          <button type="submit" class="my-3 btn btn-outline-dark">Add to Cart</button>
          <a href="#" class="pl-3 card-link">
            <img src="images/heart1.png" width="20">
          </a>
        <a href="#" class="card-link">
            <img src="images/balance.png" width="20">
          </a>
        </form>
<br>
        <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
        </div>
      <?php 
        if(++$i > 12) break;
          } ?>
        
      </div>

      <!-- <button class='btn btn-danger hide btn-sm delete btn-flat'  data-toggle="modal" data-target="#delete" data-id=""><i class='fa fa-trash'></i> Delete</button> -->

<div class="row">
  <div class="col m-sm-5 bb m-auto text-center pt-5" style="background-color:rgba(0,0,0,0.7); height:300px">
        <h1 class="p-2" style="font-weight:bold">5% off your first order </h1>
        <h5 class="p-2">Register an Account and get 5% off your first order</h5>
        <form>
        <button class="btn btn-lg btn-dark p-2">REGISTER NOW</button>
    </form>
  </div>
</div>
<div class="row my-5 justify-content-center">
  <div class="col-sm-2 ml-sm-5">
    <img src="images/nike.png"
    width="100%">
  </div>
     <div class="col-sm-2">
    <img src="images/chanelLogo.png"
    width="100%">
  </div>
 
  <div class="col-sm-2">
    <img src="images/gucciLogo.png"
    width="100%">
 </div>
  <div class="col-sm-2">
    <img src="images/jimmyChooLogo.png"
    width="100%">
 </div>
  <div class="col-sm-2">
    <img src="images/underArmourLogo.png"
    width="100%">
 
  </div>
</div>
<div class="row justify-content-center m-sm-4">
      <div class="col-sm-2 text-muted m-auto">
        <h3 style="cursor:pointer; font-size:17px">Blog Posts</h3>
      </div>
    </div>
<div class="row justify-content-center">
<div class="col-sm-3 ml-sm-3 bg-white">
    <img src="images/pexels-jasmin-chew-4960250.jpg"
    width="100%" height="400">
  <p class="text-center m-3" style="font-weight: bold; font-size: 14px">Even Nonrebels Will want to go Punk</p>
  <p class="text-muted">There's something about the delicate blush color of Rose Wine that we can't get enough of-- in bottle or decor form.</p>
  <a class="text-muted" href="">Read More>></a>
  </div>

  <div class="col-sm-3 ml-sm-3 bg-white">
    <img src="images/pexels-julia-kuzenkov-1176618.jpg"
    width="100%" height="400">
  <p class="text-center m-3" style="font-weight: bold; font-size: 14px">We See What We Want</p>
  <p class="text-muted">There's something about the delicate blush color of Rose Wine that we can't get enough of-- in bottle or decor form.</p>
  <a class="text-muted" href="">Read More>></a>
  </div>

  <div class="col-sm-3 ml-sm-3 bg-white">
    <img src="images/pexels-uncoveredlens-3620411.jpg"
    width="100%" height="400">
  <p class="text-center m-3" style="font-weight: bold; font-size: 14px">Let's Talk Naija</p>
  <p class="text-muted">There's something about the delicate blush color of Rose Wine that we can't get enough of-- in bottle or decor form.</p>
  <a class="text-muted" href="">Read More>></a>
  </div>
</div>

<div class="row justify-content-center mt-5">
      <div class="col-sm-4 m-auto">
        <h3 class="text-center" style="cursor:pointer; font-size:25px">#GIVINGS. Style Trending on</h3>
        <p class="text-muted text-center">Follow us on Instagram</p>
      </div>
    </div>

    <div class="row mt-3 justify-content-center">
      <div class="col-sm-2 ml-sm-5">
        <img src="images/pexels-godisable-jacob-914668.jpg" height="200" width="100%">
      </div>
      <div class="col-sm-2">
        <img src="images/watch.jpg" height="200" width="100%">
      </div>
      <div class="col-sm-2">
        <img src="images/shade.jpg" height="200" width="100%">
      </div>
      <div class="col-sm-2">
        <img src="images/fashion.jpg" height="200" width="100%">
      </div>
      <div class="col-sm-2">
        <img src="images/sneakers1.jpg" height="200" width="100%">
      </div>
      </div>

     <div class="row mt-3 justify-content-center">
      <div class="col-sm-2 ml-sm-5">
        <img src="images/boot1.jpg" height="200" width="100%">
      </div>
      <div class="col-sm-2">
        <img src="images/adult.jpg" height="200" width="100%">
      </div>
      <div class="col-sm-2">
        <img src="images/adeola.jpeg" height="200" width="100%">
      </div>
      <div class="col-sm-2">
        <img src="images/girl.jpg" height="200" width="100%">
      </div>
      <div class="col-sm-2">
        <img src="images/gadg.jpg" height="200" width="100%">
      </div>
    </div>
</div>
<hr class="m-5">

<?php
require('footer.php');
?>

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





	</div>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="cart.js"></script>
	<script type="text/javascript">

  
	</script>
</body>
</html>