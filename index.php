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
    //echo "connected to $dbName";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="styles/body.css">
    <title>MB</title>
</head>
<body>
        <?php
            include('navigation.php');
        ?>
        <br>
    

    <div class="table">
        <?php
            if(isset($_POST['submit'])){
                $title = $_POST['title'];
                $author = $_POST['author'];
                $synopsis = $_POST['synopsis'];
                $genre = $_POST['genre'];
                $cover = $_POST['cover'];

                $sqlInsert = "INSERT INTO tblManga (title, author, synopsis, genre, cover) VALUES ('$title', '$author', '$synopsis', '$genre', '$cover')";
                mysqli_query($conn,$sqlInsert);
                echo "Manga entry added.";
            }

            //Read all table values
        $sqlQueryAll = "SELECT * FROM tblManga";
        $res = mysqli_query($conn, $sqlQueryAll);
        //$row = $res->fetch_assoc();

        echo "<table width ='100%' border ='1px'> \n";
        echo "<tr>";
            echo "<th>";
                echo "Cover";
            echo "</th>";

            echo "<th>";
                echo "Title";
            echo "</th>";

            echo "<th>";
                echo "Author";
            echo "</th>";

            echo "<th>";
                echo "Synopsis";
            echo "</th>";

            echo "<th>";
                echo "Genre";
            echo "</th>";

        echo "</tr>";

        $numRow = mysqli_num_rows($res);
        $int;
        //$Row = $res->fetch_assoc()
        while(($Row = $res->fetch_assoc()) !== NULL){
            echo "<tr>";
                echo "<td>";
                    echo "<img src='". $Row['cover'] ."' height ='160px' width = '100px'>";
                echo "</td>";

                echo "<td>";
                    echo $Row['title'];
                echo "</td>";

                echo "<td>";
                    echo $Row['author'];
                echo "</td>";

                echo "<td>";
                    echo $Row['synopsis'];
                echo "</td>";

                echo "<td>";
                    echo $Row['genre'];
                echo "</td>";
            echo "</tr>";
        }
        
        ?>
    </div>
    
</body>
</html>
