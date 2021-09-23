<?php

include_once("../db_connect.php");
include_once('functions.inc.php');

if (isset($_POST["submit"])) {

    $email = $_POST['email'];
    $pwd = $_POST["pwd"];

    // open connection to ixnportal db
    //   $host_name = 'db5002274566.hosting-data.io';
    //   $database = 'dbs1831688';
    //   $user_name = 'dbu1315556';
    //   $password = 'wjoe298DWSHuw2*j1-';
    //
    //
    // $link = new mysqli($host_name, $user_name, $password, $database);



    //check if any input fields are empty
    if (emptyInputsLogin($email, $pwd) !== false) {
        header("location: ../login.php?error=empty_input");
        exit();
    }

    //log in as admin
    loginAdmin($link, $email, $pwd);
    }
    else {
        header("location: ../login.php");
        exit();
    }
