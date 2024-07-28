<?php
$id = $_GET['id'];

include '../Connect.php';

$deluser = "DELETE FROM brands WHERE id = $id";
$query = $conn -> query($deluser);

if ($query) {
    header("location: ../../Brands.php");
}else{
    echo $conn -> error;
}

?>