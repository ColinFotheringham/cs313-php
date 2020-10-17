<html lang="en">

<head>
     <title>Add Recipes </title>
     <link rel="stylesheet" type="text/css" href="../index.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
     <div class="topnav">
          <a class="active" href="addRecipe.php">Add Recipes </a>
          <a href="search.php">Search Recipes</a>
          <a href="family_recipes.php">Home</a>
     </div>
    

     <form action="<?php $_PHP_SELF ?>" method="POST" style="text-align: center;" enctype="multipart/form-data">
          <h1> Enter Recipes </h1>
          <h2> Recipe Name: </h2>
          <textarea type="text" name="rname" placeholder="Enter recipe name:" rows="2" cols="50" style="resize: none;"></textarea><br><br>
          <h2> Choose a category: </h2>
          <select name="category">
               <option value="1">Breakfast</option>
               <option value="2">Lunch</option>
               <option value="3">Dinner</option>
          </select><br><br>
          <h2> Enter a short sweet description: </h2>
          <textarea type="text" name="desc" rows="4" cols="50" style="resize: none;"> </textarea><br>
          <h2> Add a Picture! </h2>
          <input type="file" name="file">
          <h2> Enter Prep/Cook Time:</h2>
          <label for="prep"> Enter a prep time: (Format hh:mm Ex: 02:30) </label>
          <input type="text" name="prep"><br><br>
          <label for="cook"> Enter a cook time: (Format hh:mm Ex: 02:30) </label>
          <input type="text" name="cook"><br>
          <h2 align="center">Add Ingredients!</h2>

          <table align="center" class="table table-bordered" id="dynamic_field">
               <tr>
                    <td><textarea type="text" name="ingredients[]" placeholder="Enter ingredients here" rows="2" cols="50" style="resize: none;"></textarea> </td>
                    <td><button type="button" name="add" id="add">Add More</button></td>
               </tr>
          </table>
          <h2 align="center">Add Directions!</h2>

          <table align="center" class="table table-bordered" id="dynamic_field2">
               <tr>
                    <td><textarea type="text" name="directions[]" placeholder="Enter directions here" rows="2" cols="50" style="resize: none;"></textarea> </td>
                    <td><button type="button" name="add2" id="add2">Add More</button></td>
               </tr>
          </table>
          <input type="submit" name="submit">
     </form>

     <?php
     require("connect.php");
     $db = getBD();

     if (isset($_POST['submit'])) {
          $recipe = $_POST["rname"];

          $catId = $_POST["category"];

          $desc = $_POST["desc"];

          $prep = $_POST["prep"];

          $cook = $_POST["cook"];

          $iArray = $_POST["ingredients"];

          $dArray = $_POST["directions"];

          $file = $_FILES['file'];

          $fileName = $_FILES['file']['name'];
          $fileTmpName = $_FILES['file']['tmp_name'];
          $fileSize = $_FILES['file']['size'];  
          $fileError = $_FILES['file']['error'];
          $fileType = $_FILES['file']['type'];

          $fileExt = explode('.', $fileName);
          $fileActualExt = strtolower(end($fileExt));

               if ($fileError === 0)
               {
                         $fileNameNew = uniqid('', false) . '.' . $fileActualExt;

                         $fileDest = 'uploads/' . $fileNameNew;
                         
                         move_uploaded_file($fileTmpName, $fileDest);
               }
               else
               {
                    echo "There was an error uploading your file!";

               }
         

          try {
               $query = 'INSERT INTO recipe (food_category, recipe_name, recipe_description, prep_time, cook_time, image_dest) VALUES (:cat, :rname, :rdesc, :prep, :cook, :img_dest)';
               $statement = $db->prepare($query);
               $statement->bindValue(':cat', $catId);
               $statement->bindValue(':rname', $recipe);
               $statement->bindValue(':rdesc', $desc);
               $statement->bindValue(':prep', $prep);
               $statement->bindValue(':cook', $cook);
               $statement->bindValue(':img_dest', $fileDest);
               $statement->execute();

               $recipeId = $db->lastInsertId("recipe_id_seq");
          } catch (Exception $ex) {
               echo "Error with DB. Details: $ex";
               die();
          }

          try {

               foreach ($iArray as $value) {
                    $query2 = 'INSERT INTO Ingredients (recipe_id, ingredient_name) VALUES (:rId, :iName)';
                    $statement2 = $db->prepare($query2);
                    $statement2->bindValue(':rId', $recipeId);
                    $statement2->bindValue(':iName', $value);
                    $statement2->execute();
               }
          } catch (Exception $ex) {
               echo "Error with DB. Details: $ex";
               die();
          }
          try {

               foreach ($dArray as $values) {
                    $query3 = 'INSERT INTO recipe_instructions (recipe_id, step_description) VALUES (:rIds, :sName)';
                    $statement3 = $db->prepare($query3);
                    $statement3->bindValue(':rIds', $recipeId);
                    $statement3->bindValue(':sName', $values);
                    $statement3->execute();
               }
          } catch (Exception $ex) {
               echo "Error with DB. Details: $ex";
               die();
          }
     }

     ?>

     <script>
          $(document).ready(function() {
               var i = 1;
               $('#add').click(function() {
                    i++;
                    $('#dynamic_field').append('<tr id="row' + i + '"><td><textarea type="text" name="ingredients[]" placeholder="Enter ingredients here" rows="2" cols="50" style="resize: none;"></textarea></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove" style="background-color: #f44336;" >X</button></td></tr>');
               });
               $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id + '').remove();
               });
          });
     </script>
     <script>
          $(document).ready(function() {
               var i = 1;
               $('#add2').click(function() {
                    i++;
                    $('#dynamic_field2').append('<tr id="row2' + i + '"><td><textarea type="text" name="directions[]" placeholder="Enter directions here" rows="2" cols="50" style="resize: none;"></textarea></td><td><button type="button" name="remove2" id="' + i + '" class="btn btn-danger btn_remove2" style="background-color: #f44336;" >X</button></td></tr>');
               });
               $(document).on('click', '.btn_remove2', function() {
                    var button_ids = $(this).attr("id");
                    $('#row2' + button_ids + '').remove();
               });
          });
     </script>
     </hmtl>