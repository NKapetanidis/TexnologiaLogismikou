<?php
  if(isset( $_GET["error"])){
    if($_GET["error"]== "emptyinput"){
      echo"<p>Fill all Fields!</p>";
    }
    elseif ($_GET["error"]== "invalidUid") {
      echo"<p>Username already exits!</p>";
    }
    elseif ($_GET["error"]== "invalidEmail") {
      echo"<p>Please enter a valid E-mail!</p>";
    }
    elseif ($_GET["error"]== "passwordsdontmatch") {
      echo"<p>Passwords dont match!</p>";
    }
    elseif ($_GET["error"]== "stmtfailed") {
      echo"<p>Failed to Sign Up !</p>";
    }
    elseif ($_GET["error"]== "none") {
      echo"<p>Sign Up succesfull !</p>";
    }


  }
