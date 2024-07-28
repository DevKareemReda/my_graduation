<?php

// $id = $_POST['id'];


$id = $_POST['id'];
$title = $_POST['title'];

$price= $_POST['price'];

$img= $_POST['image'];







require '../Connect.php';


$updateadmin = "UPDATE rentcars

SET

title = '$title',

price = '$price',


image = '$img'



WHERE   id = '$id'";
$query = $conn -> query($updateadmin);
//  print_r($updateadmin);
//  exit();

if ($query) {
     header("location: ../../RentCars.php");
   

}else{
   echo $conn -> error;  
}







// $username =$_POST['name'];

// $id = $_POST['id'];

// require 'Connect.php';




// $updateadmin = "UPDATE brands
// SET
// name = '$username'


// WHERE   id = '$id'
// ";
// $query = $conn -> query($updateadmin);
// if ($query) {
//     header("location: ../Brands.php");
// }else{
//   echo $conn -> error;  
// }

?>
