<?php
    include 'connect.php';
    $_POST = json_decode(file_get_contents('php://input'));
    if($_POST){
        $name = $_POST->name;
    $email = $_POST->email;
    $phoneNum = $_POST->phoneNum;
    $pword = $_POST->pword;
    $query = "INSERT INTO users (name, email, phoneNum, pword) VALUES('$name', '$email', '$phoneNum', '$pword')";
    $insert = $conn->query($query);
    if($insert){
        echo json_encode('Success');
    }
    else{
        echo json_encode('Fail');
    }
    }
?>