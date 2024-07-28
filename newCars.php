<?php
    include "includes/header.php";
    include "includes/body.php";

?>

    
    <div class="container">
        <div class="newCars ">
            <div class="row ">
        <?php
            include "functions/connect.php";
            $selectCars = "SELECT * FROM brands";
            $queryCars  = $conn -> query($selectCars);
            foreach($queryCars as $cars){
        ?>
                <div class="col col-md-2 col-sm-3 col-4">
                    <div class="card-logo m-3"><a style="text-decoration: none;" href="car.php?id=<?=$cars['id']?>">
                        <div class="card-image m-auto">
                            <img src="image/logo/<?= $cars['image'] .'.png' ?>" alt="">
                        </div>
                        <div class="card-text">
                            <h5><?= $cars['name'] ?></h5>
                        </div>
                        </a>
                    </div>
                </div>
        <?php } ?>
            </div>
        </div>
    </div>
<?php include "includes/footer.php"; ?>