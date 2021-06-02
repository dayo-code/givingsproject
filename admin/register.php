<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Sign Up</title>

    <style type="text/css">
    body{
            background-image: url("../images/hills.jpg");
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
                    
                    <form action="signupreg.php" method="POST">
                    
                    
                    <div class="form-group col-md-12">
            <input type="text" class="form-control form-control-lg text-white bg-dark" id="firstname" name="firstname" required placeholder="First Name">
                    </div>

                    <div class="form-group col-md-12">
            <input type="text" class="form-control form-control-lg text-white bg-dark" id="lastname" name="lastname" required placeholder="Last Name">
                    </div>

                    <div class="form-group col-md-12">
            <input type="email" class="form-control form-control-lg text-white bg-dark" id="emailaddress" name="email" required placeholder="Email Address">
                    </div>

                    <div class="form-group col-md-12">
            <input type="number" class="form-control form-control-lg text-white bg-dark" id="phonenumber" name="phone" required placeholder="Phone">
                    </div>

            <div class="form-group col-md-12">
            <input type="password" class="form-control form-control-lg text-white bg-dark" id="loginpassword" name="password" required placeholder="Password">
        
                    </div>
                    <div class="form-group col-md-12">
            <button class="btn btn-primary btn-block btn-lg shadow-none mt-4 mb-3 col-md-12" type="submit">Sign Up</button>
                    </div>
                    
                    <p class="text-center text-muted text-2 mt-2 mb-0">You agree to Givings. <a class="btn-link text-light" href="#">Terms</a> and <a class="btn-link text-light" href="#">Privacy</a></p>
                    
                    </form>

                    <div class="d-flex align-items-center mt-2 mb-3">
            <hr class="flex-grow-1 border-dark">
            <span class="mx-2 text-muted text-2">Or Login</span>
            <hr class="flex-grow-1 border-dark">
            </div>
            
            <p class="text-2 text-muted text-center mb-0">Already a member? <a class="btn-link text-light text-3" href="index.php">Login</a></p>

                    </div>
        
            
            </div>
    </div>






</body>
</html>