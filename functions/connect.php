<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'project_car');

    $conn = new mysqli (HOST, USER, PASS, DBNAME);

    $conn -> set_charset('utf8');

    if(!$conn){
        echo"Could not connect: ".mysql_error();
   } 

?>