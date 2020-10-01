<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["radio"]);
$comments = htmlspecialchars($_POST["comments"]);
$places = $_POST["continents"];
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

        <h4> Major: <?=$major ?></h4>
       
        <h4>Comments: <?=$comments ?> </h4>
     
       
        <h4> This user has visited:</h4>
        <?
        
        foreach ($places as $place)
    {
	$place_clean = htmlspecialchars($place);
	echo "<li><p>$place_clean</p></li>";
    }
    
        ?>

        </body>
        </html>