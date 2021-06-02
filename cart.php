<?php
    require 'header.php';

if (!isset($_SESSION)) { ?>

<div class="row">
    <div class="col-12  text-center ">

<i class="fa fa-shopping-cart mt-5" aria-hidden="true" style="font-size:200px; color:#ededed;"></i>

<p class="text-muted font-weight-bold pt-3" style="font-size:23px;">Your cart is empty! </p>

<p class="text-dark font-weight-bold" style="font-size:20px;">You need to <a href="">login</a> to your account to view items in your cart. or <a href="">signup</a></p>



<button class="btn btn-dark btn-lg">START SHOPPING</button>
    </div>
</div>

<?php }else { ?>



















<?php } ?>
