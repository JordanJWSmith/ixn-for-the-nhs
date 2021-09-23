<?php

// function to open a connection.
// change to the correct credentials upon deployment
function OpenDbConnection() {
    $servername = "localhost";
    $user = "root";
    $pass = "root";
    $database = "ixnportal";

    $connect = new mysqli($servername, $user, $pass, $database);
    ConfirmDbConnection($connect);
    return $connect;
}

// function to check database connection
function ConfirmDbConnection($connect) {
    if($connect -> connect_errno) {
        die('connection to DB failed: ' . $connect -> connect_errno ."<br>" . 'Reason: ' . $connect -> connect_error);
    }
}

// function to close a connection.
function CloseDbConnection($connection) {
    if (isset($connection)) {
        $connection -> close();
    }
}

?>
