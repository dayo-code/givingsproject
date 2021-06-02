<?php
require "header.php";
?>


		<div class="row">
			<div class="col-md-12" style="background-color:rgba();">
				<h2 class="text-center m-5">Sign Up</h2>
			</div>

		</div>

	
    <div class="row mt-4 justify-content-center">
      <div class="col-md-5">
<form action='formregister.php' method='POST'>
                     <div class="form-row">
                <div class="col">
                  <div class="md-form md-outline mt-0">
                    <input type="text" name="firstname" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col">
                  <div class="md-form md-outline mt-0">
                    <input type="text" name="lastname" class="form-control" placeholder="Last Name"><br>
                  </div>
                </div>
              </div>
        
              <div class="md-form md-outline mt-0">
                <input type="email" name="email" class="form-control" placeholder="Your Email"><br>

              </div>
              <div class="md-form md-outline mt-0">
                <input type="password" name="password" class="form-control" placeholder="Your password">
                <small class="form-text text-muted mb-4">
                  At least 8 characters and 1 digit
                </small>
              </div>
        
              <div class="md-form md-outline">
                <input type="number" name="phone" class="form-control" placeholder="Phone Number" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <small class="form-text text-muted mb-3">
                  Optional - for two step authentication
                </small>
              </div>
        
            <div class="text-center pb-2">
        
              <div class="form-check pl-0 mb-3">
                <input type="checkbox" class="form-check-input filled-in" id="new1">
                <label class="form-check-label small text-uppercase card-link-secondary" for="new1">Subscribe to our newsletter</label>
              </div>
        
            </div>
        
            <div class="text-center mb-2">
        
              <button type="submit" class="btn btn-primary mb-4">Sign Up</button>

</form>

			</div>
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



</div>




</body>
</html>