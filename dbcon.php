<?php 
$serverName ="localhost";
$userName ="root";
$password ="";
$databaseName ="crud";

$connection =mysqli_connect($serverName,$userName,$password,$databaseName);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());}
    else{
        echo "Connected Successfully";
    }






?>