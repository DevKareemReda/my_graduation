<?php
$id = $_GET['id'];

include '../Connect.php';

$deluser = "DELETE FROM rentcars WHERE id = $id";
$query = $conn -> query($deluser);

if ($query) {
    header("location: ../../RentCars.php");
}else{
    echo $conn -> error;
}

?>