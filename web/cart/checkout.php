<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Out</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body>
<div class="topnav">
	<a href="https://guarded-coast-59727.herokuapp.com/">Colin's Homepage</a>
	<a class="active" href="checkout.php">Check Out</a>
	<a href="viewCart.php">View Cart</a>
	<a href="shoppingCart.php">Home</a>
  </div>
    <h1>Enter your address information for checkout:</h1>
   <br>
 <form action="confirmation.php" method="post" style="text-align: center;">
                Street: <input type="text" name="street"><br><br>
                City: <input type="text" name="city"><br><br>
                State: <input type="text" name="state"><br><br>
                Zip: <input type="text" name="zip"><br><br>
                <p style="text-align:center;">
                    <input type="submit" name="submit" value="Complete Purchase">
                </p>
            </form>

</body>
</html>