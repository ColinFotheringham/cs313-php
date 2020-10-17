<?php
$my_message = "Today is " . date("m/d/y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Colin Fotheringham's Home Page</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<h1> Welcome to Colin Fotheringham's Home Page</h1>
<div class="head">
<p><a href="cart/shoppingCart.php">CS 313 Shopping cart</a></p>
<p><a href="recipe/family_recipes.php">Family Recipes Project</a></p>
</div>
<hr>
<div class="box">
<img height= "400" width = "400" src="pictures/me.jpg" alt="An image of Colin Fotheringham">
</div>
<div class = "text">
	<p> Hello, my name is Colin Fotheringham; I am from Virginia. My major is <strong>software engineering.</strong> I enjoy playing basketball, cooking, and spending time with my family. </p>
</div>
<div class="quote">
<strong>My favorite quote:</strong> 
<blockquote>  A hero can be anyone. Even a man doing something as simple and reassuring as putting a coat around a young boy's shoulders to let him know that the world hadn't ended. <div class="right"><br> —The Dark Knight Rises (2012) </div>
</blockquote>
</div>
<hr>
<div>
<?= $my_message; ?>
</div>

</body>
</html>
