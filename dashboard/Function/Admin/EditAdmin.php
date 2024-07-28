<?php

$newName = $_POST['img'];
$username = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$address = $_POST['address'];
$gender= $_POST['gender'];
$id = $_POST['id'];



require '../Connect.php';


if (!empty($_POST['password'])) {
    $pass = $_POST['password'];
    $updatepass = "UPDATE admin SET password = '$pass' WHERE id ='$id' ";
    $query = $conn -> query($updatepass);
}

$updateadmin = "UPDATE admin
SET
img = '$newName',
name = '$username',
email = '$email',
phone = '$phone',
address = '$address',
gender = '$gender'



WHERE   id = '$id'";
$query = $conn -> query($updateadmin);
if ($query) {
    header("location: ../../Admin.php");
}else{
  echo $conn -> error;  
}

?>