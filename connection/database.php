<?php 

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "login_system";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

