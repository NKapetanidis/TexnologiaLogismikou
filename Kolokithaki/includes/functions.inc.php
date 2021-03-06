 <?php
 /*https://www.youtube.com/watch?v=gCo6JqGMi30&ab_channel=DaniKrossing
 */
 function emptyIpnutSignup($email, $username, $pwd,
 $pwdRepeat ){
     $result;
     if(empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) ){
      $result = true;
     }else {
        $result = false;
     }
     return $result;
 }

 function invalidUid($username ){
     $result;
     if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
      $result = true;
     }else {
        $result = false;
     }
     return $result;
 }

 function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $result = true;
    }else {
       $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat ){
    $result;
    if($pwd !== $pwdRepeat){
     $result = true;
    }else {
       $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email ){
    $sql = "SELECT * FROM usr WHERE usr_username  = ? OR usr_email  = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../sign_up/index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",  $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
      return $row;


    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $email, $username, $pwd){
    $sql = "INSERT INTO usr (usr_email, usr_username, usr_password) VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../sign_up/index.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"sss",   $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../sign_up/index.php?error=none");
    exit();
}

function emptyIpnutLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd) ){
     $result = true;
    }else {
       $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
  $uidExists = uidExists($conn, $username, $username );
  if ($uidExists === false) {
    header("location:../index.php?error=wronglogins");

  }
  $pwdHashed = $uidExists["usr_password"];
  $checkPwd = password_verify($pwd, $pwdHashed);
  if ($checkPwd === false) {
    header("location:../index.php?error=wrongloginf");
    exit();
  }
  elseif ($checkPwd === true) {
    session_start();
    $_SESSION["username"] =  $uidExists["usr_username"];
    $_SESSION["email"] =  $uidExists["usr_email"];
    header("location:../index.php");
    exit();
  }
}
function emptyIpnutRec($rname, $desc){
    $result;
    if(empty($rname) || empty($desc) ){
     $result = true;
    }else {
       $result = false;
    }
    return $result;
}

function CreateRecipe($conn,$rname, $author, $desc ){
    $sql = "INSERT INTO recipe (rec_title, rec_author, rec_content) VALUES(?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../upload_recipe/index.php?error=stmtfailed");
        exit();
    }



    mysqli_stmt_bind_param($stmt,"sss",  $rname, $author, $desc);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../upload_recipe/index.php?error=none");
    exit();
}
