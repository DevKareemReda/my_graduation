<?php
$id = $_GET['id'];

include '../Connect.php';

$deluser = "DELETE FROM usedcars WHERE id = $id";
$query = $conn -> query($deluser);

if ($query) {
    header("location: ../../UsedCars.php");
}else{
    echo $conn -> error;
}

?>