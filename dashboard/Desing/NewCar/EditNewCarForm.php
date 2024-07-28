


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
                                    $selectUser = "SELECT * FROM newcars WHERE id = $id";
                                    $query = $conn -> query($selectUser);
                                    $newcars  = $query -> fetch_assoc();

                                    ?>
                              


                             

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                <form  method="post" action="Function/NewCars/EditNewCar.php">

                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top: 30px;" >
                                                <div class="review-content-section">
                                                    
                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                        <input type="hidden" name="id" value="<?= $newcars ['id'] ?>" placeholder="id"> 
                                                    </div>
                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                        <span class="input-group-addon"><i class="icon nalika-car" aria-hidden="true"></i></span>
                                                        <input type="text" name="name" value="<?= $newcars ['name']?>" class="form-control" id="exampleInput Name">

                                                    </div>

                                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="year"value="<?= $newcars ['year']?>" class="form-control" id="year" placeholder="year" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="price" value="<?= $newcars ['price']?>" class="form-control" id="price" placeholder="price" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="minDeposit"  value="<?= $newcars ['minDeposit']?>" class="form-control" id="minDeposit" placeholder="minDeposit" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="minInstallment"  value="<?= $newcars ['minInstallment']?>"class="form-control" id="minInstallment" placeholder="minInstallment" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="motor" value="<?= $newcars ['motor']?>" class="form-control" id="motor" placeholder="motor" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="horsePower" value="<?= $newcars ['horsePower']?>" class="form-control" id="horsePower" placeholder="horsePower" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="maxSpeed" value="<?= $newcars ['maxSpeed']?>" class="form-control" id="maxSpeed" placeholder="maxSpeed" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="transmission"  value="<?= $newcars ['transmission']?>" class="form-control" id="transmission" placeholder="transmission" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="speed" value="<?= $newcars ['speed']?>" class="form-control" id="speed" placeholder="speed" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="fuel" value="<?= $newcars ['fuel']?>" class="form-control" id="fuel" placeholder="fuel" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="fuelCon" value="<?= $newcars ['fuelCon']?>" class="form-control" id="fuelCon" placeholder="fuelCon" required>
                                                                </div>
                                                           

                                             
                                                   
                                                </div>
                                            </div>
                                           

                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top: 80px;" >
                                                <div class="review-content-section">
                                                    
                                                                
                                                           <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                                   <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="origin" value="<?= $newcars ['origin']?>"  class="form-control" id="origin" placeholder="origin" required>
                                                                </div>

                                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="assembled" value="<?= $newcars ['assembled']?>"  class="form-control" id="assembled" placeholder="assembled" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="acceleration" value="<?= $newcars ['acceleration']?>" class="form-control" id="acceleration" placeholder="acceleration" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="length" value="<?= $newcars ['length']?>" class="form-control" id="length" placeholder="length" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="width" value="<?= $newcars ['width']?>" class="form-control" id="width" placeholder="width" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="height" value="<?= $newcars ['height']?> "class="form-control" id="height" placeholder="height" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="groundClearnce" value="<?= $newcars ['groundClearnce']?>" class="form-control" id="groundClearnce" placeholder="groundClearnce" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="wheelBase" value="<?= $newcars ['wheelBase']?>"  class="form-control" id="wheelBase" placeholder="wheelBase" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="trunkSize"  value="<?= $newcars ['trunkSize']?>" class="form-control" id="trunkSize" placeholder="trunkSize" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="seats" value="<?= $newcars ['seats']?>" class="form-control" id="seats" placeholder="seats" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="tractionType" value="<?= $newcars ['tractionType']?>"class="form-control" id="tractionType" placeholder="tractionType" required>
                                                                </div>
                                                                
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