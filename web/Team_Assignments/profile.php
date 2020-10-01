<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <h4>Name: </h4> 
        
        <p><?php 
        htmlspecialchars(echo $_POST["name"]);?> </p>
     
        <h4>Email: </h4>
        <a href="mailto:<?php htmlspecialchars( echo $_POST["email"]); ?>"> <?php htmlspecialchars(echo $_POST["email"]);?> </a> 

        <h4> Major </h4>
        <?php htmlspecialchars(echo $_POST["radio"]);?>
        <h4>comments</h4>
        <?php htmlspecialchars(echo $_POST["comments"]);?>
       
        <h4> This user has visited:</h4>
        <?php $acountry = htmlspecialchars (echo $_POST["continents"]);
        
        $N = count($acountry);

        for($i=0; $i < $N; $i++)
        {
          $place_clean = htmlspecialchars($acountry);
          echo($place_clean[$i] . " ");
        }

    
        ?>

        </body>
        </html>