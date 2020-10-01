<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Cart</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body>
<div class="topnav">
	<a href="https://guarded-anchorage-19071.herokuapp.com/">Colin's Homepage</a>
	<a href="checkout.php">Check Out</a>
	<a class="active" href="viewCart.php">View Cart</a>
	<a href="shoppingCart.php">Home</a>
  </div>
<h1>Items in your shopping cart:</h1>    
<?php
if(isset($_POST['computer']) & $_SESSION["computer"] > 0) { 
$_SESSION["computer"] += -1;
} 
if(isset($_POST['mouse']) & $_SESSION["mouse"] > 0) { 
$_SESSION["mouse"] += -1;
}
if(isset($_POST['keyboard']) & $_SESSION["keyboard"] > 0) { 
$_SESSION["keyboard"] += -1;
}
if(isset($_POST['laptop']) & $_SESSION["laptop"] > 0) { 
$_SESSION["laptop"] += -1;
}
?>

<form method="post">
                Computer $500.00
                <p>Quantity: <?php echo $_SESSION["computer"]; ?></p>
                <input type="submit" name="computer" value="Remove from cart"/>
                <hr>
                 Mouse $50.00
                <p>Quantity: <?php echo $_SESSION["mouse"]; ?></p>
                <input type="submit" name="mouse" value="Remove from cart"/>
                <hr>
                Keyboard $80.00
                <p>Quantity: <?php echo $_SESSION["keyboard"]; ?></p>
                <input type="submit" name="keyboard" value="Remove from cart"/>
                <hr>
                Laptop $900.00
                +
                <p>Quantity: <?php echo $_SESSION["laptop"]; ?></p>
                <input type="submit" name="laptop" value="Remove from cart"/>
                <hr>
</form>


</body>
</html>