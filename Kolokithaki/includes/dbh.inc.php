<?php

//Creating Variables
$serverName = "localhost";
$dBUsername = "root"; //Default name
$dBPassword = "";     //Default password empty
$dBName = "kolokythaki";

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName );//Connection variable = built-in function
if (!$conn){    //if this returns false -> error message
 die("Connection failed: " . mysqli_connect_error()); //shows specific error we are encountering
}
