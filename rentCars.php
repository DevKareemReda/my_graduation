<?php include "includes/header.php" ;
      include "includes/body.php";
      require_once "functions/connect.php" ;?>

    <div class="container">
        <div style="padding-top:50px" class="card-cars bg-white">


    <?php 
          $selectRent = "SELECT * FROM rentcars";
          $queryCar  = $conn -> query($selectRent);
          foreach($queryCar as $car){ ?>

            <div class="card-card mb-5">
                <div class="card-image">

                <?php 
                    $image = explode(',' , $car['image']); 
                    // for($i = 0 ; $i < count($image) ; $i++){
?>
                    
                    <a href="detalsRent.php?id=<?=$car['id']?>"><img src="image\logo\brands\rent\<?=$image[0]?>.jpg" alt=""></a>
                

                </div>
                <div class="card-text">
                    <div class="header-car">
                        <h5><?= $car['title'] ?></h5>
                    </div>
                    <div class="form-card" style="grid-template-columns: auto 25%;">
                        <div class="price" style="margin-right: 30px;">
                            <div style="color:#363f4e;font-weight: bold;padding: 3px 0;" class="larg"><span>السعر</span><span><?= $car['price'] ?></span></div>
                            <!-- <div class="small"><span>إلى</span><span>555,000</span></div> -->
                        </div>
                      
                    
                
                    <div class="btn-details">
                        <a class="btn btn-danger" href="detalsRent.php?id=<?=$car['id']?>">عرض التفاصيل</a>
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


    <div id="scroll">
        <i class="fa fa-angle-double-up"></i>
</div>
    <?php include "includes/footer.php"; ?>