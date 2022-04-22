<?php
    include 'connect.php';
    $myQuery = "SELECT * FROM users";
    $users = $conn->query($myQuery);
    $allUsers = $users->fetch_all(MYSQLI_ASSOC);
    echo json_encode($allUsers);
?>