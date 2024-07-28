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
                                <form  method="post" action="Function/RentCars/AddRentCars.php" enctype="multipart/form-data">


                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top: 80px;" >
                                                <div class="review-content-section">
                                                   <input type="hidden" name="id" value="" class="form-control" id="id" placeholder="id" >


                                                            <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="title" value="" class="form-control" id="title" placeholder="العنوان" required>
                                                                </div>

                                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:10%">
                                                            <span class="input-group-addon"></i></span>
                                                                    <input type="text" name="price" value="" class="form-control" id="price " placeholder="السعر " required>
                                                                </div>
                                                                
                                                                                       
                                                           

                                             
                                                   
                                                </div>
                                            </div>
                                           

                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top: 80px;" >
                                                <div class="review-content-section">
                                                    
                                                           
                                                          
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



