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
        echo "Connected successfully";
        echo "<br>";
        // console.log($conn);
    }
    
    // mysqli_close($conn);
?>
