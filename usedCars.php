<?php
    include "includes/header.php";
    include "includes/body.php";

?>

<div class="container">
        <div class="card-cars  effect bg-white">
            <div class="clear"></div>

<?php 

    include "functions/connect.php";
    $selectUsedCars = "SELECT * FROM usedCars";
    $queryUsedCars  = $conn -> query($selectUsedCars);
    foreach($queryUsedCars as $usedCars){

?>            
<a href="detalsUsedCars.php?id=<?=$usedCars['id']?>"> 
            <div style="height:212px;" class="card-card radius2 mb-5">
                <div class="card-image">
                    <?php
                        $image = explode(',' , $usedCars['image']);
                    ?>
                    <img src="image\logo\brands\usedCars/<?=$image[0]?>.jpg" alt="">
                </div>

                <div class="card-text">
                    <div class="header-car">
                        <h5><?= $usedCars['title']; echo ' ' . $usedCars['year'] ?></h5>
                    </div>

                    <div class="cards" dir="rtl">
                        <samp>
                            <?php

                            $selectBrand = "SELECT * FROM brands WHERE id = '$usedCars[brand]'";
                            $queryBrand  = $conn -> query($selectBrand);
                            $brand = $queryBrand -> fetch_assoc();
                            echo $brand['name'];
                            
                            ?>
                        </samp>
                        <samp><?=$usedCars['model']?></samp>
                        <!-- <samp>موكا </samp> -->
                        <samp><?=$usedCars['km']?>km</samp>
                        <samp><?=$usedCars['city']?></samp>
                        <!-- <samp class="right">تقسيط</samp> -->
                    </div>

                    <div class="cards" dir="rtl">
                        <!-- <samp>2021-05-05</samp> -->
                    </div>

                    <div class="header-footer">
                        <div class="flex">
                            <div class="main-price">
                                <p>
                                    <!-- <span class="span"> مقدم 100,000 جنيه </span> -->
                                    <span class="span1"> <?=$usedCars['price']?> جنيه</span>
                                </p>
                            </div>
                            <!-- <div class="btn-details">
                        <a class="btn btn-danger" href="dataCar.php?id=<?=$car['id']?>">عرض التفاصيل</a>
                    </div> -->
                            <div class="btn-details">
                                <span class="btn btn-danger">عرض التفاصيل</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
<?php } ?>
        </div>

<?php include "includes/footer.php"; ?>