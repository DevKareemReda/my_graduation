<?php

// $id = $_POST['id'];


$id = $_POST['id'];
$title = $_POST['title'];
$brand= $_POST['brand'];
$model= $_POST['model'];
$year= $_POST['year'];
$class= $_POST['class'];
$motor= $_POST['motor'];
$city= $_POST['city'];
$km= $_POST['km'];
$transmission= $_POST['transmission'];
$fuel= $_POST['fuel'];
$price= $_POST['price'];
$notes= $_POST['notes'];
$phone= $_POST['phone'];
$img= $_POST['image'];







require '../Connect.php';


$updateadmin = "UPDATE usedcars

SET

title = '$title',
brand = '$brand',
model = '$model',
year = '$year',
class = '$class',
motor = '$motor',
city = '$city',
km = '$km',
transmission = '$transmission',
fuel = '$fuel',
price = '$price',
notes = '$notes',
phone = '$phone',

image = '$img'



WHERE   id = '$id'";
$query = $conn -> query($updateadmin);
//  print_r($updateadmin);
//  exit();

if ($query) {
     header("location: ../../UsedCars.php");
   

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
