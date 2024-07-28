<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBNAME','project_car'); 

$conn = new mysqli(HOST,USER,PASS,DBNAME);

//for arabic language عشان يخلي الغه عربيs
$conn -> set_charset('utf8');



?>