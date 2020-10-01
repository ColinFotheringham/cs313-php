<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body>
<div class="topnav">
	<a href="https://guarded-coast-59727.herokuapp.com/">Colin's Homepage</a>
	<a href="checkout.php">Check Out</a>
	<a href="viewCart.php">View Cart</a>
	<a class="active" href="shoppingCart.php">Home</a>
  </div>
  <h1> Electronic Store </h1>
  <?php
            if(isset($_POST['computer'])) { 
            $_SESSION["computer"] += 1;
            } 
            if(isset($_POST['mouse'])) { 
            $_SESSION["mouse"] += 1;
            }
            if(isset($_POST['keyboard'])) { 
            $_SESSION["keyboard"] += 1;
            }
            if(isset($_POST['laptop'])) { 
            $_SESSION["laptop"] += 1;
            }
            ?>



<form action="" method="POST">
<div class="products">
<div>
	<h2 style="text-align: center;">Computer $500</h2>
	<img src="/../pictures/image1.jpg" height="200px"; width="300px";>
	
</div>
<div class="imgButton">
<input type="submit" name="computer" value="Add to Cart">
</div>
<div>
	<h2 style="text-align: center;">Mouse $50</h2>
	<img src="/../pictures/image2.jpg" height="200px"; width="300px";>
</div>
<div class="imgButton">
<input type="submit" name="mouse" value="Add to Cart">
</div>
</div>
<div class="products">
	<div>
		<h2 style="text-align: center;">Keyboard $80</h2>
		<img src="/../pictures/image3.jpg" height="200px"; width="300px";>
		
	</div>
	<div class="imgButton">
	<input type="submit" name="keyboard" value="Add To Cart">
	</div>
	<div>
		<h2 style="text-align: center;">Laptop $900</h2>
		<img src="/../pictures/image4.jpg" height="200px"; width="300px";>
	</div>
	<div class="imgButton">
	<input type="submit" name="laptop" value="Add to Cart">
	</div>
	</div>
</form>
</body>
</html>