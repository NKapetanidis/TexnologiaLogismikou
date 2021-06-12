<?php
  if(isset( $_GET["error"])){
    if($_GET["error"]== "emptyinput"){
      echo"<p>Fill all Fields!</p>";
    }
    elseif ($_GET["error"]== "wronglogin") {
      echo"<p>Could not log in!</p>";
    }


  }
