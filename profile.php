<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("location:login.php?msg=You must log in first");
}

 
?>

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
					<link rel="stylesheet" type="text/js" href="int.js">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">


	<title>Profile page</title>
</head>
<body>
<h1>Welcome</h1>
<p>Your Profile will be here</p>

<form action='logout.php' method='POST'>

<button class='btn btn-danger'>Log Out</button>

</form>





</body>
</html>