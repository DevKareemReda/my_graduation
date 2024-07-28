<?php 
$title = $_POST['title'];

$price= $_POST['price'];

$arr = [];
for($i=0 ; $i < count($_FILES['image']['name']) ; $i++){
    $imgname = $_FILES['image']['name'][$i];
    $tmpname = $_FILES['image']['tmp_name'][$i]; 



if($_FILES['image']['error'][$i] == 0 ){

    $extanstion = ['jpg' , 'png' , 'gif' , 'jpeg'];
    $newarr = explode('.' , $imgname); //لتجزئة اسم الصورة من اول . لحد النوع
    $ex = end($newarr);

    if(in_array($ex , $extanstion)){

        if($_FILES['image']['size'][$i] < 2000000){

            $newname = md5(uniqid()) . '.' . $ex ;
            array_push($arr , $newname);
            move_uploaded_file($tmpname , "../../images/$newname");
            
        }else{
            echo "File is big";
            
        }

    }else{
        echo "bad extantion";
    }

}else{
    echo "You must upload a file";
}

}
$img = implode(',' , $arr);


 include '../Connect.php';


$insert_user = "INSERT INTO rentcars

    (title,price,image)

	VALUES

	('$title','$price','$img')";

// var_dump($insert_user);
// exit();


$query = $conn -> query($insert_user);



if($query) {
	header("location: ../../RentCars.php");

} else {

	echo $conn-> error ;
	

}



 ?>