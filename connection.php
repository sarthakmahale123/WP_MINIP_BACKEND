<?php 
    $servername = "localhost";
    $username = "sarthakm";
    $password = "SarukoSamurai";
    $db_name = "wpminiproj";  
    $conn = new mysqli($servername, $username, $password, $db_name, 3307);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>