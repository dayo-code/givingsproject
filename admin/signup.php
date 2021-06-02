
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <title>Admin Sign Up</title>
</head>
<body>
<div class='container'>
    <div class="row mt-5">
    <div class="col-md-6 offset-md-3">
   <div class="card">
    <div class="card-header">
        <h5 class="card-title">Register</h5>
    </div>
    <div class="card-body">
    <?php if (isset($_GET['msg'])) {
        echo "<div class='alert alert-danger'>".$_GET['msg']."</div>";
    }?>
    <form action="" method="POST">
    <div class="form-group">
                <label class="control-label">First Name</label>
                <input type="text" name="firstname" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
                <label class="control-label">Last Name</label>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
            <label class="control-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
            <label class="control-label">Phone</label>
            <input type="number" name="phone" class="form-control" placeholder="Phone">
            </div>
           
            <div class="form-group">
            <label class="control-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Create a password">
            </div>
            
            <div class="form-group">
                <button class="btn btn-success btn-block">Register</button>
            </div>
        </form>
        <h5><a href="login.php">Login Page</a></h5>
    </div>
   </div>        
    </div>
    </div>
    </div> 
</body>
</html>