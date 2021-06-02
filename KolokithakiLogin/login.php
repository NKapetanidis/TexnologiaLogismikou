<?php
include_once 'header.php'
?>

<section class="login-form">
<h2>Login Up</h2>
<form action="login.inc.php" method="post">
<input type="text" name="name" placeholder="Username/Email">
<input type="text" name="pwd" placeholder="Password ">
<button type="submit" name="submit">Log in</button>
</form>
</section>

<?php
include_once 'footer.php'
?>