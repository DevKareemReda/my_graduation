<?php

      include "includes/header.php" ;
      include "includes/body.php";
      include "functions/connect.php";



$name= $_GET['search'];
 

?>


<div class="container">
<div class="card-cars bg-white">

    

    <div class="clear"></div>
<?php 
  $selectCar = "SELECT * FROM newcars WHERE name LIKE '$name%'";
  $queryCar  = $conn -> query($selectCar);
  foreach($queryCar as $car){ ?>

    <div class="card-card mb-5">
        <div class="card-image">

        <?php 
            $image = explode(',' , $car['image']); 
            // for($i = 0 ; $i < count($image) ; $i++){
?>
            
            <a href="dataCar.php?id=<?=$car['id']?>"><img src="image\logo\brands\<?=$image[0]?>.png" alt=""></a>
        

        </div>
        <div class="card-text">
            <div class="header-car">
                <h5><?= $car['name'] ?></h5>
            </div>
            <div class="form-card">
                <div class="price">
                    <div style="color:#363f4e;font-weight: bold;padding: 3px 0;" class="larg"><span>السعر</span><span><?= $car['price'] ?></span></div>
                    <!-- <div class="small"><span>إلى</span><span>555,000</span></div> -->
                </div>
                <div class="installment">
                    <div class="larg"><span>أقل مقدم</span><span><?= $car['minDeposit'] ?></span></div>
                    <div class="larg"><span>أقل تقسيط</span><span><?= $car['minInstallment'] ?></span></div>
                </div> 
            
                <div class="vs">
                    <span>قارن</span>
                    <button class="btn"><i data-id="<?= $car['id'] ?>" class="fas fa-plus"></i></button>
                </div>

            <div class="btn-details">
                <a class="btn btn-danger" href="dataCar.php?id=<?=$car['id']?>">عرض التفاصيل</a>
            </div>

        </div>
            </div>
    </div>
    <?php } ?>

    <div class="parent-space m-auto mb-">
        <div class="space mt-5"></div>
    </div> <br> <br>
    
</div>
</div>



<?php






include "includes/footer.php";

?>