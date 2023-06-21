<?php

$server = "localhost";
$dbUsername = "root";
$dbPassword = "";
$db = "sihfinal2";

$con = mysqli_connect($server, $dbUsername, $dbPassword, $db);

if (!$con) {
    die("Error ! " . mysqli_connect_error());
}
