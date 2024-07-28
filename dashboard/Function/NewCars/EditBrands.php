<?php

// $id = $_POST['id'];
$newName = $_POST['image'];
$username = $_POST['name'];
$id = $_POST['id'];

require '../Connect.php';


$updateadmin = "UPDATE brands

SET

name = '$username',
image = '$newName'


WHERE   id = '$id'";
$query = $conn -> query($updateadmin);
//  print_r($updateadmin);
//  exit();

if (!$query) {
     echo $conn -> error; 
   

}else{
   header("location: ../../Brands.php");
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
