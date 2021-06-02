<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
       <link href="../css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <title>Admin Login</title>


       <!-- remember to put the icons inside input... for signup also -->
       <style type="text/css">
       body{
              background-image: url("../images/coast.jpg");
              background-repeat:no-repeat;
              background-attachment:fixed;
              background-size:cover;
              width: 90%;
              height: 100%; 
       }
       
       </style>
</head>
<body>

       <div class="row">
              <div class="col-md-9 col-lg-7 col-xl-5 mx-auto mt-lg-5"  style="background-color:black; opacity:0.8;">
              
                     <div class="p-4 py-sm-5 px-sm-5">

                     <div class="logo mb-4"> <a class="d-flex justify-content-center" href="index.php" title="givings"><img src="../images/animal.png" alt="Givings" width="60"></a> </div>
                     
                     <form action="loginreg.php" method="POST">
                     
                     
                     <div class="form-group col-md-12">
              <input type="email" class="form-control form-control-lg text-white bg-dark" id="emailaddress" name="email" required placeholder="Email Address">
       </div>

              <div class="form-group col-md-12">
              <input type="password" class="form-control form-control-lg text-white bg-dark" id="loginpassword" name="password" required placeholder="Password">
              
                     </div>
                     <div class="form-group col-md-12">
              <button class="btn btn-primary btn-block btn-lg shadow-none mt-4 mb-3 col-md-12" type="submit">Sign In</button>
                     </div>
                     
                     
                     <div class="row text-2 mt-4">
              <div class="col-sm mx-3">
                     <div class="form-check custom-control custom-checkbox">
                     <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                     <label class="custom-control-label text-light" for="remember-me">Remember Me</label>
                     </div>
              </div>
              <div class="col-sm text-right mx-3"><a class="btn-link text-light" href="">Forgot Password ?</a></div>
              </div>
                     
                     
                     </form>

                     <div class="d-flex align-items-center mt-2 mb-3">
              <hr class="flex-grow-1 border-dark">
              <span class="mx-2 text-muted text-2">Or Sign Up</span>
              <hr class="flex-grow-1 border-dark">
              </div>
              
              <p class="text-2 text-muted text-center mb-0">New Admin? <a class="btn-link text-light text-3" href="register.php">Sign up now</a></p>

                     
                     
                     
                     
                     
                     
                     
                     </div>
              
              
              </div>
       </div>


      <p> <?php echo date('Y'); ?> </p>



</body>
</html>