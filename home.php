<?php 
// require('User.php');
// $obj = new User;

// session_start();
//   if (!isset($_SESSION['userid'])) {
//     header('location:index.php');
//   }
// $deets = $obj->get_details($_SESSION['userid']);


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/css/simple-sidebar.css" rel="stylesheet">
<style type="text/css">
  nav a{
    color:white;
  }
  .pimage{
  height: 50px;
  width: 50px;
  border-radius: 50%;
  object-fit: cover;
  object-position: center;
}

/* The sidebar menu */
.sidena {
  height:; /* Full-height: remove this if you want "auto" height */
  width:250px; /* Set the width of the sidebar */
  position:; /* Fixed Sidebar (stay in place on scroll) */
  z-index:; /* Stay on top */
  top: ; /* Stay at the top */
  left: 0;
  background-color:; /* Black */
  overflow-x:; /* Disable horizontal scroll */
  padding-top:;
}

/* The navigation menu links */
.sidena a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidena a:hover {
  color: #f1f1f1;
}

/* Style page content */
/* .main { /*check if to delete later*/
  margin-left: 160px; /* Same as the width of the sidebar */
  padding: 0px 10px;
} */


</style>
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="sidena" id="sidebar-wrapper" style="background-color: #282f3a;">
      <div class="sidebar-heading text-primary ml-lg-4 mb-lg-2" style="font-size:30px">Givings.</div>
      <div class="list-group list-group-flush">
      <div>
		<a href=""><img src="images/user.svg" class="pimage list-group-item list-group-item-action"></a>
		<span>Adedayo BAlogun<br>Project Manager</span>
	</div>
    <a href="#" class="list-group-item list-group-item-action">Home</a>
  <a class="btn accordion list-group-item list-group-item-action">Products <span class="badge badge-danger badge-pill">New</span></a>
<div class="panel">
  <p>Men</p>
  <p>Women</p>
  <p>Baby & Kids</p>
</div>

  <a href="#" class="list-group-item list-group-item-action">Customers</a>

  <a href="#" class="list-group-item list-group-item-action">Subscriptions</a>
  <a href="#" class="list-group-item list-group-item-action">Payments</a>

   <a class="btn accordion list-group-item list-group-item-action">Orders</a>
<div class="panel">
  <p>My Orders</p>
  <p>Order Status</p>
  <p>Cancel</p>
</div>

  <a href="#" class="list-group-item list-group-item-action">Transfers</a>
  <a href="#" class="list-group-item list-group-item-action">Returns</a>
  <a href="#" class="list-group-item list-group-item-action">Returns</a>
   <a href="#" class="list-group-item list-group-item-action">Settings</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg   border-bottom" style="background-color:  #282f3a;">
        <button class="btn btn-primary" id="menu-toggle">Toggle</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
            <form class="d-flex" action="" method="GET">

<input class="form-control me-2 bg-transparent" type="search" placeholder="Search Projects" aria-label="Search">
<button class="btn btn-outline-dark btn-sm" type="submit">
  <img src="images/search.png" width="13">
</button>
<span class="sr-only">(current)</span>
</form>
            </li>
            <li class="nav-item">
             <img src="images/email.svg" class="pimage">
            </li>
            <li class="nav-item">
             <img src="images/notification.svg" class="pimage">
            </li>
            <li class="nav-item">
             <img src="images/user.svg" class="pimage">
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i>Hi</i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Edit Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid" style="background-color: #ededed">
      
      <div class="row">
  	<div class="col-3">
  			<h1>Hi, Welcome</h1>
  			<p>Admin Dashboard</p>
</div>
  		<div class="col-2">
  			
<p>Balance<br>506476954</p>
  		</div>

  			<div class="col-2">
  			
<p>Today's Profit<br>506476954</p>
  		</div>

	<div class="col-2">
  			
<p>Purchases<br>506476954</p>
  		</div>

  			<div class="col-2">
  			
<p>Revenue<br>506476954</p>
  		</div>

  	</div>

  	<div class="row">
  		<div class="col-9 bg-white" style="height: 50px">
  			
<p style="display: inline-block;">Bill completed: 202 0f 250 </p>
<p style="display: inline-block;"><a href="">Products</a>
<a href="">Customer</a>
<a href="">Settings</a>
<a href="">Manage</a>
<a href="">Manage</a>
</p>
  		</div>
  	
<div class="col-3">
<p>Recent Task</p>
<div class="bg-white">
	<p>New Order Invoice Creation</p>
	<span class="badge badge-success badge-pill">PAblo King</span><img src="images/user.svg" class="pimage">
	<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>1 day 08 mins</p>
</div>

<div class="bg-white">
	<p>New Order Invoice Creation</p>
	<span class="badge badge-success badge-pill">PAblo King</span><img src="images/user.svg" class="pimage">
	<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>1 day 08 mins</p>
</div>

<div class="bg-white">
	<p>New Order Invoice Creation</p>
	<span class="badge badge-success badge-pill">PAblo King</span><img src="images/user.svg" class="pimage">
	<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>1 day 08 mins</p>
</div>


<div class="bg-white">
	<p>New Order Invoice Creation</p>
	<span class="badge badge-success badge-pill">PAblo King</span><img src="images/user.svg" class="pimage">
	<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>1 day 08 mins</p>
</div>

<div class="bg-white">
	<p>New Order Invoice Creation</p>
	<span class="badge badge-success badge-pill">PAblo King</span><img src="images/user.svg" class="pimage">
	<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>1 day 08 mins</p>
</div>






</div>

  	</div>
  

<p>This is just testing for space</p>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
