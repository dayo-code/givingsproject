<?php

include "User.php";
$obj = new User;

include "admin/user.php";
$objs = new Admin;

$id = strip_tags(trim($_GET['id']));

$cate = $obj->productPage($id);

$cates = $objs->get_products();

require 'header.php';
?>

<!--Carousel-->
<div class="row mx-5 mt-sm-5">
    <div class="col-sm-6">

      <img src="<?php echo "images/".$cate['prod_picture'];?>" class="border-none d-block w-100" alt="products" style="height:600px;">
   
    </div>

    <div class="col-sm-6 text-muted pl-4">
    
    <p class="badge badge-success">In Stock</p>
    <div class="text-muted">
        <h3 class="py-1"><?php echo $cate['prod_name'];?></h3>
        </div>
        <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>&nbsp;&nbsp;
      <a href="" class="text-decoration">10 Reviews</a>

      <p class="py-2">VENDOR:&nbsp;<span class="text-dark font-weight-bold"><?php echo $cate['brand_name'];?></span></p>

       <h2 class="text-dark"> &#8358; <?php echo number_format($cate['prod_price'], 2);?></h2>
  <hr>
          
          <div class="py-2">
          <p>COLOR:&nbsp;<span class="text-dark">BLACK</span><br>
          <i class="fa fa-circle text-dark p-1" style="font-size:25px"></i>
          <i class="fa fa-circle text-success p-1" style="font-size:25px"></i>
          <i class="fa fa-circle text-danger p-1" style="font-size:25px"></i>
          <i class="fa fa-circle text-info p-1" style="font-size:25px"></i></p>
      </div>
    <div class="pb-3" style="cursor: pointer;">
    <p>SIZE:&nbsp;<span class="text-dark">40</span></p>
            <div class="wer">40</div>
            <div class="wer">30</div>
            <div class="wer">33</div>
            <div class="wer">28</div>
          </div>

        <span><u><img src="<?php echo 'images/output-onlinepng.png'; ?>" height="13">Sizing Guide</u></span>&nbsp;&nbsp;
      <span><u><i class="fa fa-truck"></i>Delivery & Return</u></span>&nbsp;&nbsp;
      <span><u><i class="fa fa-envelope-open"></i> Message</u></span><br>
<div class="pl-3 pt-3 form-group row">
      <input type="number" name="qty" id="qty" value="1" class="form-control col-10">
      <button class="btn mx-2" id="minus" style="border:1px solid grey">-</button>
      <button class="btn" id="plus" style="border:1px solid grey">+</button>
</div>
      <button class="btn btn-block btn-dark">ADD TO CART</button>
      <div class="form-group row pl-3 pt-3">
      <button class="col-6 btn btn-outline-dark">ADD TO WISHLIST</button>
      <button class=" ml-4 col-5 btn btn-outline-dark">COMPARE</button>
</div>


    </div>
</div>

<div class="row m-5">
<div class="col-12">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active text-dark" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-product" aria-selected="true">PRODUCT INFORMATION</a>
    <a class="nav-link text-dark" id="nav-shipping-tab" data-toggle="tab" href="#nav-shipping" role="tab" aria-controls="nav-shipping" aria-selected="false">SHIPPING AND RETURNS</a>
    <a class="nav-link text-dark" id="nav-fits-tab" data-toggle="tab" href="#nav-fits" role="tab" aria-controls="nav-fits" aria-selected="false">FITS AND SIZING</a>
    <a class="nav-link text-dark" id="nav-products-tab" data-toggle="tab" href="#nav-products" role="tab" aria-controls="nav-products" aria-selected="false">PRODUCT REVIEWS</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">Prod Description</div>
  <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab">
  <p class="pt-3 font-weight-bold">SHIPPING</p>
  <p>Once your order is placed, it will ship out in 1-4 business days. After you receive a shipping confirmation, you can add on the shipping time estimates below.</p>
<ul>

<li>Nigeria: 7-10 business days</li>
<li>Africa: 7-10 business days + 2 weeks</li>
<li>UK: 8-12 business days</li>
<li>International: Unfortunately, we had to temporarily pause our shipments internationally. We’re working on getting this reinstated ASAP, but we expect this won’t return until late 2021. Don’t worry — when it’s back, you’ll be the first to know. Thanks for hanging in there.</li>
</ul>
<p>We are not able to offer expedited shipping at this time.</p>

<p>For more on international duties, <a href="" class="text-dark">click here.</a></p>

<p class="pb-2 font-weight-bold">RETURNS</p>

<p>Within Nigeria: We gladly accept unworn, unwashed items with the tags still attached within 30 days of ship date.</p> 

<p>International: We are happy to accept returns postmarked within 30 days of receipt, but we are unable to offer exchanges for our international customers at this time. Sorry.</p>
  
  </div>
  <div class="tab-pane fade" id="nav-fits" role="tabpanel" aria-labelledby="nav-fits-tab">
  <p class="pt-3 font-weight-bold">FIT & SIZING</p>
  <p>Meet your new favorite fit. <a href="" class="text-dark">View our size chart.</a></p>
<ul>
<li><?php echo $cate['prod_name'];?> is a 34A and wears an S paired with the Moon Skort</li>
</ul>

  
  </div>
  <div class="tab-pane fade" id="nav-products" role="tabpanel" aria-labelledby="nav-products-tab">
  <p class="pt-3 font-weight-bold">Customer Reviews</p>
<p>No reviews yet</p>
<button class="btn btn-outline-dark">WRITE A REVIEW</button>
  
  </div>
</div>
<hr class="mt-5">

</div>
</div>

<p class="font-weight-bold text-center mb-4" >Related Products</p>
<div class="row m-5">

<?php 
  $i = 1;
  foreach ($cates as $prod) { ?>

<div class="col-3">

<a href="product.php?id=<?php echo $prod['prod_id'];?>"><img src="<?php echo "images/".$prod['prod_picture']; ?>" alt="Men" class="shadow-sm zoom"></a><br>
<div class="pt-3 text-muted" style="font-size:13px">
          <span><?php echo $prod['brand_name']; ?></span>
        </div>
        <div class="py-1" style="font-size:13px";>
          <span><?php echo $prod['prod_name']; ?></span>
        </div>
        <div class="" style="font-size:15px; font-weight: bold">
          <span>&#8358; <?php echo number_format($prod['prod_price'], 2);?></span>
        </div>
        <form>
          <button type="submit" class="my-3 btn btn-outline-dark">Add to Cart</button>
          <a href="#" class="pl-3 card-link">
            <img src="images/heart1.png" width="20">
          </a>
        <a href="#" class="card-link">
            <img src="images/balance.png" width="20">
          </a>
        </form>

        </div>

        <?php 
        if(++$i > 4) break;
          } ?>
        






</div>
<hr class="m-5">

<?php 
    include "footer.php";
?>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

	<script type="text/javascript">
  count = 1;
    $('#plus').click(function() {
      $('#qty').val(count);
      count++;
  });

  $('#minus').click(function() {
      $('#qty').val(count);
      count--;
  });
  </script>
</body>
</html>