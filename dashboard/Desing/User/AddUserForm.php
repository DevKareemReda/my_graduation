<style>

.border_inbut{
  border: solid red ;
}

</style>

<?php
if (!isset($_GET['loc'])) {
 
}elseif($_GET['loc'] == 'error'){

     $border = "border_inbut";
     $placeholder = "this Name already exists";

}

if (!isset($_GET['loc'])) {
 
}elseif($_GET['loc'] == 'error'){

     $borde = "border_inbut";
     $placeholde = "this Password already exists";

}
if (!isset($_GET['loc'])) {
 
}elseif($_GET['loc'] == 'error'){

     $bord = "border_inbut";
     $placehold = "this Emil already exists";

}



?>



<div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Admin Add</a></li>
                                    <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li>
                                </ul>
                              
                              
                               
                              
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                <form  method="post" action="Function/User/AddUser.php" enctype="multipart/form-data">

                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-top: 80px;" >
                                                <div class="review-content-section">
                                                    
                                                <label style="color:#fff">FirstName</label>
                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="firstName" value="" class="form-control" id="firstName" placeholder="" required>
                                                    </div>

                                                <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                        <span class="input-group-addon"><i class="icon nalika-facebook"></i></span>
                                                        <input type="file" name="img" value="" class="form-control  "  id="img" placeholder="Edit img" required>

                                                    </div>
                              


                                                  


                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                    <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>

                                                    <input type="password" name="password"  placeholder="<?= !isset($placeholde) ? '' : $placeholde   ?>"  class="form-control <?=$borde?>" id="password" placeholder="Edit password" required  >

                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                        <span class="input-group-addon"><i class="icon nalika-facebook"></i></span>
                                                        <input type="email" name="email" value="" class="form-control  <?=$bord?>"  placeholder="<?= !isset( $placehold) ? '' :  $placehold  ?>"  id="email" placeholder="Edit email" required>

                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"style="padding-top: 80px;" >
                                            <div class="review-content-section">
                                            <label style="color:#fff">lastName</label>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                    <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>

                                                    <input type="text" name="lastName" value="" class="form-control <?=$border?>" id="username" 
                                                      placeholder="<?= !isset($placeholder) ? '' : $placeholder   ?>"  placeholder="Edit ListName" required>

                                                    </div>

                                                
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" name="phone" value="" class="form-control" id="address" placeholder="Edit mobil" required>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" name="address" value="" class="form-control" id="priv_id"  placeholder="Edit address" required>

                                                    </div>
                                                    <div class="input-group mg-b-pro-edt" style="margin-bottom:20%">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                          
                                                        <select name="gender" class="form-control" id="exampleFormControlSelect1" >

                                                                <option value="Admin" >Admin</option>
                                                                <option  value="User" >User</option>

                                                        </select>
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



