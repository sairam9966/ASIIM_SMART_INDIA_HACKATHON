<?php 

$server = "localhost";
$dbUsername = "root";
$dbPassword = "";
$db = "sihfinal";
$con = mysqli_connect($server,$dbUsername,$dbPassword,$db);

if(!$con){
    die("Error ! ".mysqli_connect_error());
}