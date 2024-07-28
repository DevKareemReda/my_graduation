<?php
    include "includes/header.php";
    include "includes/body.php";
    include "functions/connect.php";
    $id = $_GET['id'];
?>
<div class="container">
                    <div class="car-details">
                        <div class="car-image">

                          <div class="image-display">
                            <div class="image-showcase">
<?php 

      $selectDataCar = "SELECT * FROM rentcars WHERE id = '$id' ";
      $queryDataCar  = $conn -> query($selectDataCar);
      $dataCar = $queryDataCar -> fetch_assoc();


                    $image = explode(',' , $dataCar['image']); 
                    for($i = 0 ; $i < count($image) ; $i++){ ?>

                      <img src="image/logo/brands/rent/<?= $image[$i]?>.jpg" alt="image">

               <?php     } ?>
                            </div>
                          </div>

                          <div class="image-select">
                            <?php
                            $dataId = 0 ;
                              for($i = 0 ; $i < count($image) ; $i++){ 
                            ?>
                            <div style="width:100%;" class="image-items">
                              <a href="#" data-id="<?=++$dataId?>">
                                <img src="image/logo/brands/rent/<?= $image[$i]?>.jpg" alt="image">
                              </a>
                            </div>
<?php } ?>
                            
                          </div>
                          <div class="buy-btn">
                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-buy" data-toggle="modal" data-target="#exampleModal">
                                 تأجير السياره
                              </button>

                              <!-- Modal -->
                              <div style="transition: 0.7s;" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body m-auto">
                                       هل أنت متأكد من شراء السياره.؟
                                    </div>
                                    <div class="modal-footer m-auto">
                                      <button style="background-color: #eb3d32; color: white;" type="button" class="btn btns">متأكد</button>
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">لا</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <div class="parent-space m-auto mb-">
                            <div class="space mt-5"></div>
                        </div> <br> <br>

                        </div>

                        <div class="car-text">
                            <h5> <span>سيارة</span>
                               <?php echo  $dataCar['title']; ?>  
                               <span>للإيجار</span>  </h5>
                            <div class="details">


                              <div>
                              <span>جنيه</span>
                                <span><?=$dataCar['price']?></span>
                                <h6>: السعر</h6>
                                <i class="fas fa-tags"></i>
                              </div>
                             
  
                            </div>
                            
                        </div>
                        <br> <br>
                        <div id="scroll">
                          <i class="fa fa-angle-double-up"></i>
                        </div>
                    </div>
                    <div class="parent-space m-auto mb-">
                      <div class="space mt-5"></div>
                  </div> <br> <br>
                    

            
        </div>




<div id="scroll">
        <i class="fa fa-angle-double-up"></i>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="../js/project.js"></script>
        <script>
          const image = document.querySelectorAll('.image-select a');
            const imageBtn = [ ... image];
            let = imgId = 1;

            imageBtn.forEach((imgItems) => {
              imgItems.addEventListener('click', (Event) => {
                Event.preventDefault();
                imgId = imgItems.dataset.id;
                slideImage();
              });
            });

            function slideImage(){
              const displayWidth = document.querySelector('.image-showcase img:first-child').clientWidth;

              document.querySelector('.image-showcase').style.transform = `translateX(${ - (imgId - 1 ) * displayWidth}px)`;
            }
            window.addEventListener('resize', slideImage);
        </script>
<?php include "includes/footer.php"; ?>