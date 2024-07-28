<?php 
$username = $_POST['name'];
$brand= $_POST['brand'];
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
            move_uploaded_file($tmpname , "../../../image/logo/brands/$newname");
            
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


$insert_user = "INSERT INTO newcars 

    (brand,name,year,price,minDeposit,minInstallment,motor,horsePower,maxSpeed,transmission,speed,fuel,fuelCon,origin,assembled,acceleration,length, 
	width,height,groundClearnce,wheelBase,trunkSize,seats,tractionType,image)

	VALUES

	('$brand','$username','$year','$price','$minDeposit','$minInstallment','$motor','$horsePower','$maxSpeed'
	,'$transmission','$speed','$fuel','$fuelCon','$origin','$assembled','$acceleration','$length','$width','$height','$groundClearnce','$wheelBase','$trunkSize','$seats','$tractionType','$img')";

// var_dump($insert_user);
// exit();


$query = $conn -> query($insert_user);



if($query) {
	header("location: ../../Brands.php");

} else {

	echo $conn-> error ;
	

}



 ?>