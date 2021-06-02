<?php 
require('user.php');
$obj = new Admin;

//session_start();
  if (!isset($_SESSION['userid'])) {
    header('location:index.php');
  }

include "includehome.php";
?>


      <div class="container-fluid">

        <h2 class="mt-3 mb-3">Dashboard</h2>
           
            <!-- Small boxes (Stat box) -->
            <div class="row text-white">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box p-2" style="background-color:#00c0ef">
            <div class="inner">
              <h3>&#8358; 14.97K</h3>              <p>Total Sales</p>
            </div>
            <!-- <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div> -->
            </div>
            <div style="background-color:#00a4cc" class="text-center">
            <a href="#" class="small-box-footer text-white">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box p-2 bg-success">
            <div class="inner">
              <h3>23</h3>          
              <p>Number of Products</p>
            </div>
            <!-- <div class="icon">
              <i class="fa fa-barcode"></i>
            </div> -->
          </div>
          <div style="background-color:#008d4d" class="text-center">
            <a href="#" class="small-box-footer text-white">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box p-2 bg-warning">
            <div class="inner">
              <h3>3</h3>             
              <p>Number of Users</p>
            </div>
            <!-- <div class="icon">
              <i class="fa fa-users"></i>
            </div> -->
          </div>
          <div style="background-color:#cf850f" class="text-center">
            <a href="#" class="small-box-footer text-white">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box p-2 bg-danger">
            <div class="inner">
              <h3>&#8358; 10</h3>
              <p>Sales Today</p>
            </div>
            <!-- <div class="icon">
              <i class="fa fa-money"></i>
            </div> -->
          </div>
          <div style="background-color:#bc4031" class="text-center">
            <a href="#" class="small-box-footer text-white">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

<div style="height:400px;"></div>















  </div>
  <!--#wrapper -->

  <?php
  include "footer.php";
?>

</body>

</html>
