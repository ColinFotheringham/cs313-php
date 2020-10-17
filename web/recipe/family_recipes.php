<html lang="en">

<head>

    <title>Family Recipes </title>
    <link rel="stylesheet" type="text/css" href="../index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="topnav">
        <a href="addRecipe.php">Add Recipes </a>
        <a href="search.php">Search Recipes</a>
        <a class="active" href="family_recipes.php">Home</a>
    </div>
    <h1> Popular Recipes: </h1>
    <br>
    <div class="row">
    <div class="card-deck">
    
    <?php
    session_start();
    $num = 0;
    require "connect.php";
    $db = getBD();
    $total_recipes = $db->prepare("SELECT * FROM recipe");
    $total_recipes->execute();
    while ($fRow = $total_recipes->fetch(PDO::FETCH_ASSOC)) {
        $num++;
        $id = $fRow["id"];
        $recipe_name = $fRow["recipe_name"];
        $image = $fRow["image_dest"];
        $recipeDesc = $fRow["recipe_description"];
        if ($num == 4)
        {
            echo '<div class="row">';

            $num = 0;
        }
       echo '<div class="card">
        <a href = "page.php?recipe=' . $recipe_name . '&id=' . $id . '"><img src="'. $image . '" height="200px"; width="400px"; class="card-img-top img-adjusted" alt="..."></a>
        <div class="card-body">
        <h5 class="card-title">'. $recipe_name . '</h5>
        <p class="card-text">'. $recipeDesc . '</p>
        </div>
        </div>
        <br>';

        echo '<p>' . $recipe_name . "</p>";
        echo '<a href = "page.php?recipe=' . $recipe_name . '&id=' . $id . '"> <img src="' . $image .'"height="200px"; width="300px";></a>';
        
    }
    foreach ($num / 4 as $value)
    {
        echo '</div>';
    }

    ?>
        </div>
    </div>
    
</body>
    </hmtl>