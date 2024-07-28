<?php

// $username = $_POST['name'];

// $password = md5($_POST['password']);

// $email = $_POST['email'];
// $mobil = $_POST['mobil'];
// $address = $_POST['address'];



// $gender = $_POST['gender'];

//  include 'Connect.php';

// $selectadmin = " SELECT name FROM admin ";
// $queryadd = $conn -> query($selectadmin);
// $sel_add = $queryadd -> fetch_assoc();

// if ($sel_add['name'] !== $username) {
   
//     $insertuser = "INSERT INTO

//     admin   
//     (name,password,email,mobil,address,gender)
//     VALUES
//     ('$username','$password','$email','$mobil','$address','$gender')";
   
//     $query= $conn -> query($insertuser);
   
//     if ($query) {
//         header('location: ../Admin.php');
//     }else{
//         echo $conn -> error;
//     }
    
// }else{
 
    
//     header('location: ../Admin.php?action=add&&loc=error');

  
    
    
// }


 




 $db = mysqli_connect('localhost', 'root', '', 'project_car'); 
//   $username = "";
//   $email = "";
  if (isset($_POST['register'])) {
  	$username = $_POST['name'];

  	$password = $_POST['password'];
      $email = $_POST['email'];
	  $phone = $_POST['phone'];
	  $address = $_POST['address'];
	  $gender = $_POST['gender'];
	  
	  $imgName = $_FILES['img']['name'];
	  $tmpName = $_FILES['img']['tmp_name'];
	  
	  if($_FILES['img']['error'] == 0 ){
	  
		  $extensions = ['jpg' , 'png' , 'gif' ,'jpeg'];
		  // $newArr = explode('.', $imgName);
		  // $ext = end($newArr);
	  
		  $ext = pathinfo($imgName, PATHINFO_EXTENSION);
	  
		  if(in_array($ext, $extensions)){
	  
			  if($_FILES['img']['size'] < 2000000){
	  
				  $newName = md5(uniqid()) .'.'. $ext;
				  move_uploaded_file($tmpName, '../../images/'.$newName);
	  
			  } else {
	  
				  echo "file size is too big";
			  }
	  
		  } else {
			  echo "bad extension";
		  }
	  
	  } else {
	  
		  echo "You must upload a file";
	  }
	  



  	$sql_u = "SELECT * FROM admin WHERE name ='$username'";
  	$sql_e = "SELECT * FROM admin WHERE email    ='$email'";
    $sql_p = "SELECT * FROM admin WHERE password ='	$password'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);
	$res_p = mysqli_query($db, $sql_p);

  	if (mysqli_num_rows($res_u) > 0) {
  	  echo " <p>Sorry... username already taken </p>";
        header('location:../../Admin.php?action=add&&loc=error');	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  echo " <p>Sorry... email already taken </p>"; 
        header('location:../../Admin.php?action=add&&loc=error');	
	}else if(mysqli_num_rows($res_p) > 0){	
		echo " <p>Sorry...passwqrd already taken</p>"; 
        header('location:../../Admin.php?action=add&&loc=error');		
  	}else{
           $query = "INSERT INTO admin ( img, name, password ,  email , phone,address, gender) 
      	    	  VALUES ( '$newName','$username', ' ".md5($password)."', '$email ' , ' $phone',' $address ','$gender ')";
           $results = mysqli_query($db, $query);
           echo 'Saved!';
           header('location:../../Admin.php');	
           exit();
  	}
  }

  ?>