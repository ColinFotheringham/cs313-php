<html lang="en">

<head>
    <?php
    $recipe = $_GET['recipe'];
    echo "<title>" . $recipe . "</title>";

    ?>
    <link rel="stylesheet" type="text/css" href="page.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="topnav">
        <a href="addRecipe.php">Add Recipes </a>
        <a class="active" href="search.php">Search Recipes</a>
        <a href="family_recipes.php">Home</a>
    </div>
    <?php
    require "connect.php";

    $id = $_GET['id'];
    echo '<h1>' . $recipe . '</h1>';

    $db = getBD();
    $number = 0;

    $recipe_info = $db->prepare("SELECT * FROM recipe WHERE id = $id");

    $recipe_info->execute();
    while ($rRow = $recipe_info->fetch(PDO::FETCH_ASSOC)) {
        $food_cat = $rRow["food_category"];
        $recipeDesc = $rRow["recipe_description"];
        $prepTime = $rRow["prep_time"];
        $cookTime = $rRow["cook_time"];
        $image = $rRow["image_dest"];
    }
    echo '<img src="' . $image . '" height="200px"; width="300px">';
    echo "<p> Recipe Description: " . $recipeDesc . "</p>";
    echo "<p> Prep Time: " . $prepTime  . "</p>";
    echo "<p> Cook Time: " . $cookTime . "</p>";
    echo "<h1> Ingredients: </h1>";
    $ingredients = $db->prepare("SELECT * FROM ingredients WHERE recipe_id = $id");
    $ingredients->execute();
    while ($fRow = $ingredients->fetch(PDO::FETCH_ASSOC)) {
        $number++;
        $ingredientName = $fRow['ingredient_name'];

        echo "<p> Ingredient #" . $number . ": " . $ingredientName . "<br>";
    }
    echo "<h1> Directions: </h1>";
    $number = 0;
    $directions = $db->prepare("SELECT * FROM recipe_instructions WHERE recipe_id = $id");
    $directions->execute();
    while ($g = $directions->fetch(PDO::FETCH_ASSOC)) {
        $number++;
        $step = $g['step_description'];
        echo "<p> Step #" . $number . ": " . $step . "<br>";
    }

    ?>