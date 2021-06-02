<?php

if ($_POST) {
    require "User.php";
    $log_obj = new User;
    
    $mail = strip_tags(trim($_POST['email']));
    $pass = strip_tags($_POST['password']);

    $logged = $log_obj->login($mail, $pass);

    if ($logged > 0) {
        $_SESSION['userid'] = $logged;
        header('location:index.php?msg=Succesfully logged in');
    }else{
        $inv = "<h3 class='alert alert-danger text-center mt-5'>Invalid Login, Please retry</h3>";
    }
}

require "header.php";

?>


		<div class="row">
			<div class="col-md-12">

      <?php
            if (!empty($inv)) {
                echo "$inv";
            }
            
            if (!empty($_GET['msg'])) {
                echo "<h3 class='alert alert-danger text-center mt-5'>".$_GET['msg']."</h3>";
            }
        ?>

				<h2 class="text-center m-5">Sign In</h2>
			</div>

		</div>

		<div class="row mt-4 justify-content-center">

			<div class="col-md-5">
				
				<form action='' method='POST'>
					<div>
					    <input type="email" name="email" placeholder="Your Email" class="form-control"><br>

				    </div>
					<div>

						<input type="password" name="password" placeholder="Your Password" class="form-control">

					</div><br>
					<div  class="pl-4">

						<input type="checkbox" name="remember" class="form-check-input" id="checkbox">
						<label class="form-check-label" for="checkbox">Remember Me</label>
						<p class="text-right">Forgot Password?</p>
					 </div><br><br>
				     <div class="text-center pb-2">	

					    <button class="btn btn-dark btn-lg mb-2">Log In</button>
        
						<p>Not a member? <a href="register.php">Register</a></p>

              			<p>or sign in with:</p>

                         <a type="button" class="btn-floating btn-fb btn-lg mr-1">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a type="button" class="btn-floating btn-tw btn-lg mr-1">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a type="button" class="btn-floating btn-git btn-lg">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a type="button" class="btn-floating btn-li btn-lg mr-1">
                            <i class="fab fa-google-plus-g"style="color: black"></i>
                        </a>
</div>
                    

</form>
</div>
</div>

         <div class="row py-4 px-5 d-flex align-items-center bg-primary">

          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">

            <h6 class="mb-0">Get connected with us on social networks!</h6>

          </div>

          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->


 <?php
 require ('footer.php');
 ?>






</body>
</html>