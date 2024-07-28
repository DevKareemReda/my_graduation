<?php
    session_start();

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    require_once "connect.php";
    $selectUser = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $queryUser  = $conn -> query($selectUser);
    $fetchUser  = $queryUser -> fetch_assoc();

    $id = $fetchUser['id'];

    if($queryUser -> num_rows > 0){
        $_SESSION['user'] = $id ;
        // echo $id ;
        header('location: ../user.php');
        // echo 'welcome';
    } else {
        header('location: ../index.php');
    }