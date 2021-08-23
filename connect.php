<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap\css\bootstrap-grid.min.css">

    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

    $hostName = "localhost";
    $userName = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($hostName, $userName, $password);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        // echo "Connected successfully";
        // echo "<br>";
        // console.log($conn);
    }
    
    // mysqli_close($conn);
?>
