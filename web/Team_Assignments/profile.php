<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <h4>Name: </h4> 
        <p><?php echo $_POST["name"];?></p>
     
        <h4>Email: </h4>
        <a href="mailto:<?php echo $_POST["email"];?>"> <?php echo $_POST["email"];?> </a> 

        <h4> Major </h4>
        <?php echo $_POST["radio"];?>
        <h4>comments</h4>
        <?php echo $_POST["comments"];?>
       
        <h4> This user has visited:</h4>
        <?php $acountry = echo $_POST["continents"];
        if(empty($acountry)) 
         {
            echo("You didn't select any countries.");
        } 
        
        $N = count($acountry);

        for($i=0; $i < $N; $i++)
        {
          echo($acountry[$i] . " ");
        }

  ?>
        </body>
        </html>