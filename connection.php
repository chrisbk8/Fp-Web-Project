<?php

$server = "127.0.0.1:3306";
$username = "u652632623_benedict_db";
$password = "Tekfo-eclair02";
$database = "u652632623_benedict_db";

$con = new mysqli($server,$username,$password,$database);

// Check connection
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
}