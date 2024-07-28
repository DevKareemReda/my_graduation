<?php

// $id = $_POST['id'];
$username = $_POST['name'];

$id = $_POST['id'];
$year= $_POST['year'];
$price= $_POST['price'];
$minDeposit= $_POST['minDeposit'];
$minInstallment= $_POST['minInstallment'];
$motor= $_POST['motor'];
$horsePower= $_POST['horsePower'];
$maxSpeed= $_POST['maxSpeed'];
$transmission= $_POST['transmission'];
$speed= $_POST['speed'];
$fuel= $_POST['fuel'];
$fuelCon= $_POST['fuelCon'];
$origin= $_POST['origin'];
$assembled= $_POST['assembled'];
$acceleration= $_POST['acceleration'];
$length= $_POST['length'];
$width= $_POST['width'];
$height= $_POST['height'];
$groundClearnce= $_POST['groundClearnce'];
$wheelBase= $_POST['wheelBase'];
$trunkSize= $_POST['trunkSize'];
$seats= $_POST['seats'];
$tractionType= $_POST['tractionType'];
$img= $_POST['image'];







require '../Connect.php';


$updateadmin = "UPDATE newcars

SET

name = '$username',
year = '$year',
price = '$price',
minDeposit = '$minDeposit',
minInstallment = '$minInstallment',
motor = '$motor',
horsePower = '$horsePower',
maxSpeed = '$maxSpeed',
transmission = '$transmission',
speed = '$speed',
fuel = '$fuel',
fuelCon = '$fuelCon',
origin = '$origin',
assembled = '$assembled',
acceleration = '$acceleration',
length = '$length',
width = '$width',
height = '$height',
groundClearnce = '$groundClearnce',
wheelBase = '$wheelBase',
trunkSize = '$trunkSize',
seats = '$seats',
tractionType = '$tractionType',
image = '$img'



WHERE   id = '$id'";
$query = $conn -> query($updateadmin);
//  print_r($updateadmin);
//  exit();

if ($query) {
     header("location: ../../Brands.php");
   

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
