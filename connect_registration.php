<?php
    $name = $_POST['name'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $membership = $_POST['membership'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'alphax_gym');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into users(name, address, number, email, username, password, membership)
        values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissss",$name, $address, $number, $email, $username, $password, $membership);
        $stmt->execute();
        // echo "registration successfully...";
        header("Location: login.php"); 
        $stmt->close();
    }
?>