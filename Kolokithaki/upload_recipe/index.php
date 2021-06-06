<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="../css/styles.css">
<title>Σελίδα Δημιουργίας Συνταγής</title>
</head>
<?php
include "../header.php"
?>

<body class="bg-light">

  <form action="Recipe.php">
    <label for="r_name">Όνομα συνταγής:</label><br>
    <input type="text" id="r_name" name="r_name"><br>
    <label for="r_ing">Συστατικά:</label><br>
    <input type="text" id="r_ing" name="r_ing" ><br><br>
    <label for="r_desc">Εκτέλεση:</label><br>
    <input type="text" id="r_desc" name="r_desc" ><br><br>
    <input type="submit" value="Submit">
  </form>

  <h1>Προσθήκη ετικετών</h1>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
<?php
include "../footer.php"
?>
</html>
