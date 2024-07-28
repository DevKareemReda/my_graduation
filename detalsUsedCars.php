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

      $selectDataCar = "SELECT * FROM usedCars WHERE id = '$id' ";
      $queryDataCar  = $conn -> query($selectDataCar);
      $dataCar = $queryDataCar -> fetch_assoc();


                    $image = explode(',' , $dataCar['image']); 
                    for($i = 0 ; $i < count($image) ; $i++){ ?>

                      <img src="image/logo/brands/usedCars/<?= $image[$i]?>.jpg" alt="image">

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
                                <img src="image/logo/brands/usedCars/<?= $image[$i]?>.jpg" alt="image">
                              </a>
                            </div>
<?php } ?>
                            
                          </div>
                          <div class="buy-btn">
                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-buy" data-toggle="modal" data-target="#exampleModal">
                                 شراء السياره
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
                               <span>مستعمله للبيع و التقسيط</span>  </h5>
                            <div class="details">

                              <div>
                                <span><?=$dataCar['year']?></span>
                                <h6>: أول إستخدام</h6>
                                <i class="fas fa-car-crash"></i>
                              </div>
                              <div>
                              <span>جنيه</span>
                                <span><?=$dataCar['price']?></span>
                                <h6>: السعر</h6>
                                <i class="fas fa-tags"></i>
                              </div>
                              <div>
                                <span><?=$dataCar['city']?></span>
                                <h6>: المدينة</h6>
                                <i class="fas fa-city"></i>
                              </div>
                              <div>
                              <span><?=$dataCar['notes']?></span>
                              <h6>: بعض التفاصيل</h6>
                              <i class="fas fa-comment-alt"></i>
                                
                                
                                
                              </div>

                              <div>
                                <span><?=$dataCar['motor']?></span>
                                <h6>: سعة الموتور</h6>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 295.329 295.329" style="enable-background:new 0 0 295.329 295.329;" xml:space="preserve" class="svg newCar_svgIcon powercc replaced-svg">
                                  <path id="XMLID_49_" d="M291.416,142.376l-33.14-25.16c-2.997-2.275-7.01-2.661-10.383-0.98c-3.362,1.666-5.492,5.101-5.492,8.861  v15.395h-9.803v-15.559c0-5.465-4.43-9.896-9.893-9.896h-19.696V78.294c0-5.466-4.431-9.896-9.894-9.896h-30.773V57.896h8.284  c5.464,0,9.895-4.431,9.895-9.895c0-5.464-4.431-9.893-9.895-9.893h-63.92c-5.463,0-9.894,4.429-9.894,9.893  c0,5.464,4.431,9.895,9.894,9.895h8.29v10.502h-38.25c-5.464,0-9.895,4.43-9.895,9.896v19.313H47.528  c-5.465,0-9.895,4.43-9.895,9.894v22.634H19.787v-28.073c0-5.464-4.43-9.894-9.894-9.894C4.429,92.167,0,96.598,0,102.061v103.49  c0,5.464,4.429,9.893,9.894,9.893c5.464,0,9.894-4.43,9.894-9.893v-28.074h17.847v23.203c0,5.465,4.43,9.894,9.895,9.894h24.881  l34.907,42.989c1.879,2.313,4.701,3.656,7.68,3.656h107.709c5.464,0,9.893-4.432,9.893-9.895v-13.073h9.803v13.073  c0,3.865,2.249,7.372,5.758,8.99c1.323,0.607,2.735,0.904,4.135,0.904c2.319,0,4.609-0.816,6.441-2.383l33.141-28.404  c2.193-1.882,3.453-4.625,3.453-7.514v-68.663C295.329,147.164,293.88,144.246,291.416,142.376z">
                                  </path>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                   </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  </svg>
                              </div>

                              <div>
                                <span><?php 
                                
                                  $transmissions = $dataCar['transmission']; 
                                  $selectTrans  = "SELECT * FROM transmission WHERE id = '$transmissions' ";
                                  $queryTrans   = $conn -> query($selectTrans);
                                  $fetchTrans   = $queryTrans -> fetch_assoc();
                                  echo $fetchTrans['type'];
                                  
                                ?></span>
                                <h6>: ناقل الحركه</h6>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg newCar_svgIcon transmission replaced-svg">
                                  <g>
                                  <g>
                                  <path d="M437.02,74.98C388.667,26.628,324.38,0,256,0S123.333,26.628,74.98,74.98C26.628,123.333,0,187.619,0,256    s26.628,132.667,74.98,181.02C123.333,485.372,187.62,512,256,512s132.667-26.628,181.02-74.98    C485.372,388.667,512,324.381,512,256S485.372,123.333,437.02,74.98z M272.696,380.227h-33.391V272.696h-87.854v107.531h-33.391    V131.773h33.391v107.531h87.854v-107.53h33.391v107.53h87.855v-107.53h33.391v140.921H272.696V380.227z M388.296,375.069    l-12.329-19.908h-6.666v19.908h-17.808v-64.838h29.771c12.693,0,21.826,11.415,21.826,22.466c0,7.489-3.47,14.428-9.315,18.538    l14.612,23.835H388.296z">
                                  </path>
                                  </g>
                                  </g>
                                  <g>
                                  <g>
                                  <path d="M380.078,325.756h-10.776v13.881h11.233c2.193,0,4.476-2.558,4.476-6.94C385.008,328.221,382.268,325.756,380.078,325.756    z">
                                  </path>
                                  </g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  </svg>
                              </div>

                              <div>
                                <span>
                                <?php 
                                
                               $fuel = $dataCar['fuel'];
                               $selectFuel = "SELECT type FROM fuelType WHERE id = '$fuel'";
                               $queryFuel  = $conn -> query($selectFuel);
                               $fetchFuel  = $queryFuel -> fetch_assoc();
                               echo $fetchFuel['type']; 
                               
                               ?>
                                
                                </span>
                                <h6>: الوقود</h6>
                                <i class="fas fa-gas-pump"></i>
                              </div>

                              <div>
                              <span><?php 
                                
                                $transmissions = $dataCar['transmission']; 
                                $selectTrans  = "SELECT * FROM transmission WHERE id = '$transmissions' ";
                                $queryTrans   = $conn -> query($selectTrans);
                                $fetchTrans   = $queryTrans -> fetch_assoc();
                                echo $fetchTrans['type'];
                                
                              ?></span>
                              <h6>: ناقل الحركه</h6>
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg newCar_svgIcon transmission replaced-svg">
                                <g>
                                <g>
                                <path d="M437.02,74.98C388.667,26.628,324.38,0,256,0S123.333,26.628,74.98,74.98C26.628,123.333,0,187.619,0,256    s26.628,132.667,74.98,181.02C123.333,485.372,187.62,512,256,512s132.667-26.628,181.02-74.98    C485.372,388.667,512,324.381,512,256S485.372,123.333,437.02,74.98z M272.696,380.227h-33.391V272.696h-87.854v107.531h-33.391    V131.773h33.391v107.531h87.854v-107.53h33.391v107.53h87.855v-107.53h33.391v140.921H272.696V380.227z M388.296,375.069    l-12.329-19.908h-6.666v19.908h-17.808v-64.838h29.771c12.693,0,21.826,11.415,21.826,22.466c0,7.489-3.47,14.428-9.315,18.538    l14.612,23.835H388.296z">
                                </path>
                                </g>
                                </g>
                                <g>
                                <g>
                                <path d="M380.078,325.756h-10.776v13.881h11.233c2.193,0,4.476-2.558,4.476-6.94C385.008,328.221,382.268,325.756,380.078,325.756    z">
                                </path>
                                </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                </svg>
                            </div>

                              <div>
                                <span><?=$dataCar['class']?></span>
                                <h6>: الفئه و الكماليات</h6>
                                <i class="fas fa-star-half-alt"></i>
                              </div>

                              <div>
                                <span><?=$dataCar['phone']?></span>
                                <h6>: رقم التواصل</h6>
                                <i class="fas fa-phone"></i>
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