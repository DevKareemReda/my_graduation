<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "project_car";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
     if(!$conn){
         die('Could not Connect MySql Server:' .mysql_error());
       }

       if (isset($_GET['data'])) {
     
        $query = "SELECT * FROM newcars WHERE name LIKE '{$_GET['data']}%' LIMIT 25";
         $result = mysqli_query($conn, $query);
      
         if (mysqli_num_rows($result) > 0) {
          while ($user = mysqli_fetch_array($result)) {
           $res[] = $user['name'];
          }
         } else {
           $res = array();
         }
         //return json res
         echo json_encode($res);
        }





// echo json_encode([$_GET['data']]);