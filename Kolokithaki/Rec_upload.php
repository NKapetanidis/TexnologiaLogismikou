<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<?php
include "header.php"
?>

<body>

  <form action="Recipe.html">
    <label for="r_name">Recipe Name:</label><br>
    <input type="text" id="r_name" name="r_name"><br>
    <label for="r_ing">Ingridients:</label><br>
    <input type="text" id="r_ing" name="r_ing" ><br><br>
    <label for="r_desc">Execution:</label><br>
    <input type="text" id="r_desc" name="r_desc" ><br><br>
    <input type="submit" value="Submit">
  </form>

  <h1>Add tags</h1>

</body>
<?php
include "footer.php"
?>
</html>
