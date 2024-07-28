<?php
$id = $_GET['id'];

include '../Connect.php';

$deluser = "DELETE FROM user WHERE id = $id";
$query = $conn -> query($deluser);

if ($query) {
    header("location:../../User.php");
}else{
    echo $conn -> error;
}

?>