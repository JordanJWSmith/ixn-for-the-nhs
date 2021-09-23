<?php
session_start();

// open connection to ixnportal db
//   $host_name = 'db5002274566.hosting-data.io';
//   $database = 'dbs1831688';
//   $user_name = 'dbu1315556';
//   $password = 'wjoe298DWSHuw2*j1-';
//
//
// $link = new mysqli($host_name, $user_name, $password, $database);

include_once("../db_connect.php");

function emptyInputsSignup($name, $email, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;
    if ($pwd !== $pwdRepeat){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emailExists($link, $email){
    $sql = "SELECT * FROM admins WHERE email = ?;";
    $stmt = mysqli_stmt_init($link);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Admin_SignUp.php?error=stmtfailed_email_exists");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close;
}

function createAdmin($link, $name, $email, $pwd){
    $sql = "INSERT INTO admins (adminName, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($link);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Admin_SignUp.php?error=cant_create");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close;

    $_SESSION['email'] = $email;
    $_SESSION['pwd'] = $pwd;
    $_SESSION['name'] = $name;

    header("location: ../Admin_SignUp.php?error=none");

}

function emptyInputsLogin($email, $pwd) {
    $result;
    if (empty($email) || empty($pwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginAdmin($link, $email, $pwd) {
    $emailExists = emailExists($link, $email);

    if ($emailExists == false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExists["password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd == false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd == true) {
        $_SESSION['logged_in'] = true;
        $_SESSION["adminID"] =  $emailExists["adminID"];
        $_SESSION['adminEmail'] = $email; //main admin's email. Dont confuse with $_SESSION['email'].
        header("location: ../Admin_Home.php");
        exit();
    }
}
