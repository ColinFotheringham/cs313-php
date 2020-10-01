<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["radio"]);
$comments = htmlspecialchars($_POST["comments"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <h4>Name: <?=$name ?> </h4> 
        
     
        <h4>Email: </h4>
        <a href="mailto:<?=$email ?>"> <?=$email ?> </a> 

        <h4> Major <?=$major ?></h4>
       
        <h4>comments <?=$comments ?> </h4>
     
       
        <h4> This user has visited:</h4>
        <?php $acountry = htmlspecialchars(echo $_POST["continents"]);
        
        $N = count($acountry);

        for($i=0; $i < $N; $i++)
        {
          $place_clean = htmlspecialchars($acountry);
          echo($place_clean[$i] . " ");
        }

    
        ?>

        </body>
        </html>