<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<?php
include "header.php"
?>

<body>

  <form action="user.html">
    <label for="email">Email:</label><br>
    <input type="email" id="fmail" name="email"><br>
    <label for="username">Username:</label><br>
    <input type="username" id="fname" name="username"><br>
    <label for="pass">Password:</label><br>
    <input type="password" id="pass" name="pass" ><br><br>
    <label for="pass">Repeat Password:</label><br>
    <input type="password" id="pass" name="pass" ><br><br>
    <label for="birthday">Date of Birth:</label><br>
    <input type="date" id="birthday" name="birthday" ><br><br>
    <input type="submit" value="Sign_Up">
  </form>


</body>
<?php
include "footer.php"
?>
</html>
