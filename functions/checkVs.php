<?php 

    $input1 = $_POST['search1'];
    $input2 = $_POST['search2'];

    if (empty($_POST['search1'])){

        header('location: ../vsCars.php');

    } else {
        header('location: ../vs.php?in1=$input1&&in2=input2');
    }