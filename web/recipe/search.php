<html lang="en">

<head>
  <title>Search Recipes</title>
  <link rel="stylesheet" type="text/css" href="../index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="topnav">
    <a href="addRecipe.php">Add Recipes </a>
    <a class="active" href="search.php">Search Recipes</a>
    <a href="family_recipes.php">Home</a>
  </div>
  <h1> Select a category </h1>
  <div class="buttons">
  <form action="<?php $_PHP_SELF ?>" method="GET">
    <input type="submit" name="Breakfast" value="Breakfast">
    <input type="submit" name="Lunch" value="Lunch">
    <input type="submit" name="Dinner" value="Dinner">
  </form>
  </div>
  <div class="row">
    <div class="card-deck">
  <?php
 
  require "connect.php";
  $db = getBD();

  if ($_GET["Breakfast"]) {
    $breakfast_recipes = $db->prepare("SELECT * FROM recipe WHERE food_category = 1");
    $breakfast_recipes->execute();
    while ($fRow = $breakfast_recipes->fetch(PDO::FETCH_ASSOC)) {
      $num++;
      $id = $fRow["id"];
      $recipe_name = $fRow["recipe_name"];
      $image = $fRow["image_dest"];
      $recipeDesc = $fRow["recipe_description"];
     
     echo '<div class="card">
      <a href = "page.php?recipe=' . $recipe_name . '&id=' . $id . '"><img src="'. $image . '" height="200px"; width="300px"; class="card-img-top img-adjusted" alt="..."></a>
      <div class="card-body">
      <h5 class="card-title">'. $recipe_name . '</h5>
      <p class="card-text">'. $recipeDesc . '</p>
      </div>
      </div>
      <br>';
    }
  }
  if ($_GET["Lunch"]) {
    $lunch_recipes = $db->prepare("SELECT * FROM recipe WHERE food_category= 2");
    $lunch_recipes->execute();
    while ($fRow = $lunch_recipes->fetch(PDO::FETCH_ASSOC)) {
      $num++;
      $id = $fRow["id"];
      $recipe_name = $fRow["recipe_name"];
      $image = $fRow["image_dest"];
      $recipeDesc = $fRow["recipe_description"];
     
     echo '<div class="card">
      <a href = "page.php?recipe=' . $recipe_name . '&id=' . $id . '"><img src="'. $image . '" height="200px"; width="300px"; class="card-img-top img-adjusted" alt="..."></a>
      <div class="card-body">
      <h5 class="card-title">'. $recipe_name . '</h5>
      <p class="card-text">'. $recipeDesc . '</p>
      </div>
      </div>
      <br>';
    }
  }
  if ($_GET["Dinner"]) {
    $dinner_recipes = $db->prepare("SELECT * FROM recipe WHERE food_category= 3");
    $dinner_recipes->execute();
    while ($fRow = $dinner_recipes->fetch(PDO::FETCH_ASSOC)) {
      $num++;
        $id = $fRow["id"];
        $recipe_name = $fRow["recipe_name"];
        $image = $fRow["image_dest"];
        $recipeDesc = $fRow["recipe_description"];
      
       echo '<div class="card">
        <a href = "page.php?recipe=' . $recipe_name . '&id=' . $id . '"><img src="'. $image . '" height="200px"; width="300px"; class="card-img-top img-adjusted" alt="..."></a>
        <div class="card-body">
        <h5 class="card-title">'. $recipe_name . '</h5>
        <p class="card-text">'. $recipeDesc . '</p>
        </div>
        </div>
        <br>';
    }
  }
  ?>
  </hmtl>