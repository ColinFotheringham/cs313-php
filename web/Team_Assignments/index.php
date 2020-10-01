<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form id="form1" method="POST" action="profile.php">
        <h4>Name: </h4>
        <input type="text" name="name"> 
        <h4>Email: </h4>
        <input type="text" name="email">
        <h4> Major </h4>
        <input type="radio" name="radio" value="Computer Science">Computer Science
        <input type="radio" name="radio" value="Web Design and Development">Web Design and Development
        <input type="radio" name="radio" value="Computer information Technology">Computer information Technology
        <input type="radio" name="radio" value="Computer Engineering">Computer Engineering
        <h4>comments</h4>
       <textarea name="comments" form="form1"  rows="4" cols="50"></textarea>

<input type="checkbox" id="North America" name="North America" value="North America">
  <label for="NorthAmerica"> North America </label><br>


  <input type="checkbox" id="South America" name="South America" value="South America">
  <label for="South America"> South America </label><br>

  
<input type="checkbox" id="Europe" name="Europe" value="Europe">
  <label for="Europe">Europe </label><br>

  
<input type="checkbox" id="Africa" name="Africa" value="Africa">
  <label for="Africa">Africa </label><br>

  
<input type="checkbox" id="Asia" name="Asia" value="Asia">
  <label for="Asia"> Asia </label><br>


  
<input type="checkbox" id="Australia" name="Australia" value="Australia">
  <label for="Australia"> Australia </label><br>


  
<input type="checkbox" id="Antarctica" name="Antarctica" value="Antarctica">
  <label for="Antarctica"> Antarctica </label><br>
       <input type="submit">
    </form>
</body>
</html>