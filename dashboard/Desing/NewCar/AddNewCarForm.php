<style>

/* .border_inbut{
  border: solid red ;
} */

</style>

<?php
// if (!isset($_GET['loc'])) {
 
// }elseif($_GET['loc'] == 'error'){

//      $border = "border_inbut";
//      $placeholder = "this Name already exists";

// }

// if (!isset($_GET['loc'])) {
 
// }elseif($_GET['loc'] == 'error'){

//      $borde = "border_inbut";
//      $placeholde = "this Password already exists";

// }
// if (!isset($_GET['loc'])) {
 
// }elseif($_GET['loc'] == 'error'){

//      $bord = "border_inbut";
//      $placehold = "this Emil already exists";

// }



?>



<div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> اضافة سياره</a></li>
                                    <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li>
                                </ul>
                              
                              
                               
                              
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                <!-- <form  method="post" action="Function/NewCars/AddNewCar.php" enctype="multipart/form-data"> -->
                                <form  method="post" action="<?php echo 'Function/NewCars/AddNewCar.php?id='.$_GET['id']?>" enctype="multipart/form-data">


                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top: 80px;" >
                                                <div class="review-content-section">
                                                    
                                                            <input type="hidden" name='brand' value='<?php echo $_GET['id'] ?>'>

                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="name" value="" class="form-control" id="username" placeholder="الاسم" required>
                                                                </div>

                                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="year" value="" class="form-control" id="year" placeholder="السنه" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="price" value="" class="form-control" id="price" placeholder="السعر" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="minDeposit" value="" class="form-control" id="minDeposit" placeholder="الحدالادني" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="minInstallment" value="" class="form-control" id="minInstallment" placeholder="اقل تقسيط" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="motor" value="" class="form-control" id="motor" placeholder="المحرك" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="horsePower" value="" class="form-control" id="horsePower" placeholder="قوة حصان" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="maxSpeed" value="" class="form-control" id="maxSpeed" placeholder="السرعة القصوى" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="transmission" value="" class="form-control" id="transmission" placeholder="النقل" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="speed" value="" class="form-control" id="speed" placeholder="السرعه" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="fuel" value="" class="form-control" id="fuel" placeholder="الوقود" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="fuelCon" value="" class="form-control" id="fuelCon" placeholder="استهلاك الوقود" required>
                                                                </div>
                                                           

                                             
                                                   
                                                </div>
                                            </div>
                                           

                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top: 80px;" >
                                                <div class="review-content-section">
                                                    
                                                                
                                                           <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                                   <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="origin" value="" class="form-control" id="origin" placeholder="بلد المنشأ" required>
                                                                </div>

                                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="assembled" value="" class="form-control" id="assembled" placeholder="بلدالتجميع" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="acceleration" value="" class="form-control" id="acceleration" placeholder="التسريع" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="length" value="" class="form-control" id="length" placeholder="الطول" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="width" value="" class="form-control" id="width" placeholder="العرض" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="height" value="" class="form-control" id="height" placeholder="الارتفاع" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="groundClearnce" value="" class="form-control" id="groundClearnce" placeholder="الخلوص الارضي" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="wheelBase" value="" class="form-control" id="wheelBase" placeholder="قاعدة العجلات" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="trunkSize" value="" class="form-control" id="trunkSize" placeholder="سعة الشنطه" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="seats" value="" class="form-control" id="seats" placeholder="المقاعد" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="tractionType" value="" class="form-control" id="tractionType" placeholder="نوع الجر" required>
                                                                </div>
                                                                
                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="file" name="image[]" value="" class="form-control" id="image" placeholder="الصور" required  multiple>
                                                                </div>
                                                                
                                                           
                                                                
                                             
                                                   
                                                </div>
                                            </div>
                                                






                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    
                                                        <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10"  name ="register">Submit</button>
                                                  
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



