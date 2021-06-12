<?php

if (isset($_POST["submit"])) {
  $rname= $_POST["r_name"];
  $desc= $_POST["r_desc"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyIpnutRec($rname, $desc) !== false){
      header("location: ../upload_recipe/index.php?error=emptyinput");
      exit();
  }

  CreateRecipe($conn, $rname, $_SESSION["email"] , $desc );
}
else {
    header("location: ../index.php");
    exit();
}
