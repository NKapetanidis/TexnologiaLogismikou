<?php
//Check if users got here the right way, not by URL
if (isset($_POST["submit"])){

    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    //Error Handlers
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Inputs empty
    if(emptyIpnutSignup($email, $username, $pwd,  $pwdRepeat ) !== false){
        header("location: ../sign_up/index.php?error=emptyinput");
        exit();
    }

    if(invalidUid($username) !== false){
        header("location: ../sign_up/index.php?error=invaliduid");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../sign_up/index.php?error=invalidemail");
        exit();
    }

    if(pwdMatch($pwd,$pwdRepeat) !== false){
        header("location: ../sign_up/index.php?error=pwddontmatch");
        exit();
    }

    if(uidExists($conn,$username, $email) !== false){
        header("location: ../sign_up/index.php?error=usernametaken");
        exit();
    }

    createUser($conn,$email, $username, $pwd);


}
else {
    header("location: ../sign_up/index.php");
    exit();
}
