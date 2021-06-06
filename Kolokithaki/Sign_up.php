<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<?php
include "header.php"
?>

<body>

  <form action="user.php">
    <label for="email">Email:</label><br>
    <input type="email" id="fmail" name="email"><br>
    <label for="uid">Username:</label><br>
    <input type="text" id="uid" name="uid"><br>
    <label for="pwd">Password:</label><br>
    <input type="password" id="pwd" name="pwd" ><br><br>
    <label for="pwdrepeat">Repeat Password:</label><br>
    <input type="password" id="pwdrepeat" name="pwdrepeat" ><br><br>
    <input type="submit" value="Sign_Up">
  </form>


</body>
<?php
include "footer.php"
?>
</html>
