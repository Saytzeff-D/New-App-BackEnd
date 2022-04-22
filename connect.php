<?php
header("Access-Control-Allow-Origin: http://localhost:5000");
header("Access-Control-Allow-Headers: *");
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'newApp';
    $conn = new mysqli($server, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      // echo "Connected successfully";
?>