<?php

$dbServer = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "dbmanga";
$conn = "";

try{
    $conn = mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);
}
catch(mysqli_sql_exception $e){
    echo "Could not connect to $dbName";
}

if($conn){
    echo "connected to $dbName";
}