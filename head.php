<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html >
<html >
<head>
	<title> ገበታ </title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" ></script>
	<script src="../../web/js/bootstrap.bundle.min.js" ></script>
	<link rel="stylesheet" href="../../web/css/bootstrap.css" type="text/css" >
	<link rel="stylesheet" href="../../web/css/styleWA.css" type="text/css" >
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<div class="container-fluid">

		<nav class="navbar navbar-expand-lg navbar-light nav_et">
            <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/gebeta_logo.jpg" alt="gebeta logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link " style="color: #f6d19c; font-size:25px;" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item"><a style="color: #f6d19c; font-size:25px;" class="nav-link" href="products.php"> Products</a></li>
            <li class="nav-item"><a style="color: #f6d19c; font-size:25px;" class="nav-link" href="about.php">About Us</a></li>
            <li class="nav-item"><a style="color: #f6d19c; font-size:25px;" class="nav-link" href="contact.php" title="contact"><span>Contact</span></a></li>
            <?php
            if(isset($_SESSION)) 
            { 
              if(isset($_SESSION['userid']))
            {
              echo '<li class="nav-item"> <a style="color: #f6d19c; font-size:25px;" class="nav-link" href="add_product.php">DashBoard</a></li>';
              echo '<li class="nav-item"> <a style="color: #f6d19c; font-size:25px;" class="nav-link" href="logout.php">LogOut</a></li>';
            }else
            {
              echo '<li class="nav-item"><a style="color: #f6d19c; font-size:25px;" class="nav-link" href="sign.php">Free Sign Up</a> </li>
              <li class="nav-item"><a style="color: #f6d19c; font-size:25px;" class="nav-link" href="sign.php" title="Sign In"><span>Sign In</span></a></li>
              ';
            }

            } 
            
            ?>
                
              </ul>
            </div>
          </div>
</nav>

