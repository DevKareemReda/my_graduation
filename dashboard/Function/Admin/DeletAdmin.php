<?php
$id = $_GET['id'];

include '../Connect.php';

$deluser = "DELETE FROM admin WHERE id = $id";
$query = $conn -> query($deluser);

if ($query) {
    header("location: ../../Admin.php");
}else{
    echo $conn -> error;
}

?>