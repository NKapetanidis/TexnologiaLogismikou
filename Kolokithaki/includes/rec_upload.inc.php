<?php

if (isset($_POST["submit"])) {
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyIpnutLogin($username, $pwd) !== false){
      header("location: ../Sign_up.php?error=emptyinput");
      exit();
  }

  loginUser($con,$username, $pwd );
}
