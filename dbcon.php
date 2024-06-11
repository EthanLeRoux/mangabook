<?php

$dbServer = "localhost";
$dbUser = "id22303786_root";
$dbPass = "Hentai@123";
$dbName = "id22303786_dbmanga";
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