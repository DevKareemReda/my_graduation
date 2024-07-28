<?php

session_start();
$username = $_POST['name'];

$password = md5($_POST['password']);

// print_r($password);
// print_r($username);

// exit();



require '../Connect.php';

$selectuser = "SELECT * FROM admin WHERE name = '$username' AND  password = '$password' ";


$query = $conn -> query($selectuser);

$admin = $query -> fetch_assoc();

 if ($query -> num_rows > 0) {

    $id = $admin['id'];
    




    $_SESSION['login_id'] = $id ;
   
    header('location: ../../Admin.php');
}else{
    header('location:../../Login.php');
}


//@5219831983$   بتاع سالم













?>


