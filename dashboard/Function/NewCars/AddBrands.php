<?php 

$username = $_POST['name'];
$imgName = $_FILES['image']['name'];
$tmpName = $_FILES['image']['tmp_name'];
if($_FILES['img']['error'] == 0 ){
	  
	$extensions = ['jpg' , 'png' , 'gif' ,'jpeg'];
	// $newArr = explode('.', $imgName);
	// $ext = end($newArr);

	$ext = pathinfo($imgName, PATHINFO_EXTENSION);

	if(in_array($ext, $extensions)){

		if($_FILES['img']['size'] < 2000000){

			$newName = uniqid() .'.'. $ext;
			move_uploaded_file($tmpName, '../../../image/logo/'.$newName);

		} else {

			echo "file size is too big";
		}

	} else {
		echo "bad extension";
	}

} else {

	echo "You must upload a file";
}



include '../Connect.php';
$insert_user = "INSERT INTO brands 
	(name,image )
	
	VALUES
	('$username','$newName' )
";

$query = $conn -> query($insert_user);

if($query) {
	header("location: ../../Brands.php");
} else {

	echo $conn -> error ;

}



 ?>