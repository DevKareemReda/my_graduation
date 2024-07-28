<?php

$newName = $_POST['img'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phon = $_POST['phon'];

$address = $_POST['address'];
$gender= $_POST['gender'];
$id = $_POST['id'];

require '../Connect.php';


if (!empty($_POST['password'])) {
    $pass = $_POST['password'];
    $updatepass = "UPDATE user SET password = '$pass' WHERE id ='$id' ";
    $query = $conn -> query($updatepass);
}

$updateadmin = "UPDATE user
SET
img = '$newName',
firstName = '$firstName',
lastName = '$lastName',
email = '$email',
phone = '$phone',
address = '$address',
gender = '$gender'


WHERE   id = '$id'";
$query = $conn -> query($updateadmin);
if ($query) {
    header("location:../../User.php");
}else{
  echo $conn -> error;  
}

?>