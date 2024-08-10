<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "photographer_db";
$conn = mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if (!$conn) {
    die("Somthing went wrong".mysqli_connect_error());
   
}

?>