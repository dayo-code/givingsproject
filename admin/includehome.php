<?php

$deets = $obj->get_details($_SESSION['userid']);


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Admin Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../starter/css/simple-sidebar.css" rel="stylesheet">
<style type="text/css">
  nav a{
    color:white;
  }
  #searchs {
  width: 130px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

/* When the input field gets focus, change its width to 100% */
#searchs:focus {
  width: 50%;
}

  .pimage{
  height: 30px;
  width: 30px;
  border-radius: 50%;
  object-fit: cover;
  object-position: center;
}
/* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color:;
  color:;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border:none;
  outline:none;
  transition: 0.4s;
}
.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding-left: 10px;
  background-color: white;
  display: none;
  overflow: hidden;
  width:100%;
  border:none;
  outline:none;
}

</style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark" id="sidebar-wrapper">
      <div class="sidebar-heading text-white ml-lg-4" style='font-size:33px'>Givings. </div>
      <div class="list-group list-group-flush">
      <img src="../images/user.svg" style="width:100px" class="m-auto my-lg-2" alt="User Image">
      <p class="m-auto text-white">
              <?php echo $deets['first_name']." ".$deets['last_name'];?>
              </p>
              <small class="m-auto text-white"><i class="fa fa-circle" style="color:green"></i>&nbsp;&nbsp;Online</small>
            
        <a href="home.php" class="list-group-item list-group-item-action bg-light mt-lg-3"> Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Sales</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">User</a>

        <button class="accordion text-dark">Products</button>
<div class="panel bg-light">
<a href="category.php" class="bg-light page-link text-muted"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Category</a>
        <a href="products.php" class="bg-light page-link text-muted"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Products List</a>
        
</div>

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg  border-bottom p-lg-3" style="background-color:gray;">
        <a class="" id="menu-toggle"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            
            <li class="nav-item mr-lg-5">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../images/user.svg" class="pimage" alt="User Image">
            <span class="hidden-xs"> <?php echo $deets['first_name'];?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="../images/user.svg" class="pimage justify-content-center-" alt="User Image">

              <p>
              <?php echo $deets['first_name']." ".$deets['last_name'];?>
              </p>
              <small>Member since <?php echo date('M, Y'); ?></small>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Profile</a>
              </div>
              <div class="pull-right">
                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>




            
            </li>
                    </ul>
        </div>
      </nav>


      <!-- Bootstrap core JavaScript -->
  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>



      <script type="text/javascript">
      var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
      
  // Menu Toggle Script
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

      
      
      </script>