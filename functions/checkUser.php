<?php
    require_once "connect.php";
    $selectUsers = "SELECT * FROM user";
    $queryUser   = $conn -> query($selectUsers);
    $fetchUser   = $queryUser -> fetch_assoc();

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone     = $_POST['phone'];
    $email     = $_POST['email'];
    if($email == $fetchUser['email']){
        header('location: ../newAccount.php?email=يوجد بريد إلكترونى بهذا الإسم بالفعل');
        exit();
    }
    $gender    = $_POST['gender'];
    $address   = $_POST['address'];
    $password  = md5($_POST['password']);
    $image     = $_FILES['img'];

    $imgName   = $_FILES['img']['name'];
    $tmpName   = $_FILES['img']['tmp_name'];

    if($_FILES['img']['error'] == 0 ){

        $extensions = ['jpg' , 'png' , 'gif' ,'jpeg'];
        // $newArr = explode('.', $imgName);
        // $ext = end($newArr);

        $ext = pathinfo($imgName, PATHINFO_EXTENSION);

        if(in_array($ext, $extensions)){

            if($_FILES['img']['size'] < 2000000){

                $newName = md5(uniqid()) .'.'. $ext;
                move_uploaded_file($tmpName, 'C:\xampp\htdocs\project cars\image\users\\'.$newName);

            } else {

                // echo "file size is too big";
                header('location:../newAccount.php?name=file size is too big');
            }

        } else {
            // echo "bad extension";
            header('location:../newAccount.php?name=bad extension');

        }

    } else {

        // echo "You must upload a file";
        header('location:../newAccount.php?name=You must upload a file');
    }

    // require_once "connect.php";
    $insertUser = "INSERT INTO user 
      (   firstName  ,   lastName  ,   phone  ,  email   ,  password   ,  img       ,   gender  ,   address)
VALUE ( '$firstName' , '$lastName' , '$phone' , '$email' , '$password' , '$newName' , '$gender' , '$address' )";

$query = $conn -> query($insertUser);


if($query) {
	header("location: ../index.php");
    // $_SESSION[]
} else {
	echo $conn -> error;
}
    

?>