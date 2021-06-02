<!DOCTYPE html>
<html lang='en'>
<head>
  
	<meta name="author" content="Adedayo .A. Balogun">
		<meta name="keywords" content="">
			<meta name="description" content="">
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
				<link rel="stylesheet" type="text/css" href="style.css">
					<link type="text/javascript" src="cart.js">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">



	<title>Givings</title>
</head>
<body>

	<div class="container-fluid">
		<div class="row py-1 bg-dark" style="color:#ededed">
			<div class="col-sm-2">
				
				<span>Phone:<a href="" style="color:#ededed"> +234 80 9951 5333</a></span>

			</div>

			<div class="col-sm-8">
				
				<span>Address:<a href="https://goo.gl/maps/gDMshxhAx8FZysJJ8" target="_blank" style="color:#ededed"> 29, Afariogun, Ikeja, Lagos.</a></span>

			</div>


			<div class="col">
				
				<a href="https://www.twitter.com" target="_blank" class="link pl-sm-2"><img src="images/facebook.png" width="17"></a>
					<a href="" class="link pl-2"><img src="images/ig.png" width="17"></a>
						<a href="" class="link pl-2"><img src="images/twitter.png" width="17"></a>
							<a href="" class="link pl-2"><img src="images/pint.png" width="17"></a>
							
			</div>
		</div>
    </div>


		<!--Navbar-->

		<header class="row top sticky-top">
			<div class="col">
	<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand text-dark" href="index.php" style="font-size:30px">Givings.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
     <li class="nav-item dropdown">
      <li class="nav-item mr-1">

        <form class="d-flex" action="" method="GET">

      <input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark btn-sm" type="submit" style="border:black">
        <img src="images/search.png" width="13">
      </button>
     
    </form>
              </li></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="images/user.png" width="13">
          My Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Sign In</a>
          <a class="dropdown-item" href="register.php">Register</a>
        </div>
    </li>

      <li class="nav-item">
        <a class="nav-link text-dark" href="wishlist.php">
          <i class="fa fa-heart"></i>
           Wishlist(0)</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-dark" href="cart.php">
          <i class="fa fa-shopping-bag"></i>
           Shopping Bag(<span id="cart-container"><?php 
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				echo 0; 
			}
			?></span>)</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-question-circle-o text-dark"></i>
          Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Currency</a>
          <a class="dropdown-item" href="#">Payment Methods</a>
          <a class="dropdown-item" href="#">Return Policy</a>
          <a class="dropdown-item" href="#">FAQs</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">About Us</a>
          <a class="dropdown-item" href="#">Contact Us</a>
          <a class="dropdown-item" href="#">Coming Soon</a>
          <a class="dropdown-item" href="#">Categories</a>
          <a class="dropdown-item" href="#">Lookbook</a>
          <a class="dropdown-item" href="#">Shop action</a>
          <a class="dropdown-item" href="#">Blog</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
		</header>
    