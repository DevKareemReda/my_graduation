<?php

print_r($_FILES['img']);
   
// $imgName = $_FILES['img']['name'];
// $tmpName = $_FILES['img']['tmp_name'];

// if($_FILES['img']['error'] == 0 ){

// 	$extensions = ['jpg' , 'png' , 'gif' ,'jpeg'];
// 	// $newArr = explode('.', $imgName);
// 	// $ext = end($newArr);

// 	$ext = pathinfo($imgName, PATHINFO_EXTENSION);

// 	if(in_array($ext, $extensions)){

// 		if($_FILES['img']['size'] < 2000000){

// 			$newName = md5(uniqid()) .'.'. $ext;
// 			move_uploaded_file($tmpName, '../../images/'.$newName);

// 		} else {

// 			echo "file size is too big";
// 		}

// 	} else {
// 		echo "bad extension";
// 	}

// } else {

// 	echo "You must upload a file";
// }