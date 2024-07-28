


  <!-- Single pro tab start-->
  <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> تعديل البيانات</a></li>
                                    <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li>
                                </ul>
                              
                              
                                <?php 
                                    include "Function/Connect.php";
                                   $id = $_GET['id'];
                                    $selectUser = "SELECT * FROM rentcars WHERE id = $id" ;
                                    $query = $conn -> query($selectUser);
                                    $newcars  = $query -> fetch_assoc();

                                    ?>
                              


                             

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                <form  method="post" action="Function/RentCars/EditRentCars.php">

                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top: 30px;" >
                                                <div class="review-content-section">
                                                    
                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                        <input type="hidden" name="id" value="<?= $newcars ['id'] ?>" placeholder="id"> 
                                                    </div>
                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                        <span class="input-group-addon"><i class="icon nalika-car" aria-hidden="true"></i></span>
                                                        <input type="text" name="title" value="<?= $newcars ['title']?>" class="form-control" id="exampleInput title" required>

                                                    </div>

                                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="price"value="<?= $newcars ['price']?>" class="form-control" id="price" placeholder="brand" required>
                                                                </div>
                                                            
                                             
                                                   
                                                </div>
                                            </div>
                                           

                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top: 80px;" >
                                                <div class="review-content-section">
                                                    
                                                             
                                                          <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="file" name="image" value="<?= $newcars ['image']?>" class="form-control" id="image" placeholder="image" required>
                                                                </div>
                                                                
                                                           
                                                                
                                             
                                                   
                                                </div>
                                            </div>
                                                





                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    
                                                        <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" >Submit</button>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                 
</form>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>