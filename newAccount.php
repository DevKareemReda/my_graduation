<?php
    include "includes/header.php";
    include "includes/body.php";
    require_once "functions/connect.php";

    // if(!isset($_GET['name'])){

    //  }  // elseif ($_GET['name'] == 'error'){
    //         $border = "border_inbut" ;
    //         $placeholder = "This user already exists." ;
    // }
?>
<style>
    /* .border */
</style>
<div class="container">
    <div class="bodyAccount">
        <div class="newAccount">
            <div class="new-form">
                <span>إنشاء حساب <i style="font-size:20px; color:#eb3d32" class="fas fa-car-crash"></i></span>
                
            </div>
            <form dir="rtl" action="functions/checkUser.php" method="post" enctype="multipart/form-data">
                <div class="form">
                <div class="name-phone">
                    <input type="text"name="firstName" placeholder="الإسم الأول">
                    <input type="text"name="lastName" placeholder="الإسم الثانى">
                </div>
                <div class="email">
                    <input class="<?= !isset($_GET['email']) ? '' : 'place'; ?>" type="email" name="email" id="" placeholder="<?= !isset($_GET['email']) ? 'البريد الإلكترونى' : $_GET['email']; ?>">
                </div>
                <div class="phone">
                    <input type="text" name="phone" id="" placeholder="رقم الهاتف">
                </div>
                <div class="address">
                    <input type="text" name="address" id="" placeholder="العنوان">
                </div>
                <div class="password">
                    <input type="password" name="password" id="" placeholder="كلمة المرور">
                </div>
                <div class="gender" style="width:31%" >
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
                        <label class="form-check-label" for="inlineRadio1">ذكر</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
                        <label class="form-check-label" for="inlineRadio2">أنثى</label>
                    </div>
                </div>
                <div class="float"></div>
                <div class="image">
                    <input type="file" name="img">
                    <span><?= !isset($_GET['name']) ? '' : $_GET['name']; ?></span>
                </div>
            </div>
                <div class="btn-form">
                    <button class="btn">إنشاء حساب</button>
                </div>
            </form>
        </div>
    

<br> <br>
                        <!-- <div id="scroll">
                          <i class="fa fa-angle-double-up"></i>
                        </div> -->
                    <!-- </div> -->
                    <!-- <div class="parent-space m-auto mb-">
                      <div class="space mt-5"></div>
                  </div> <br> <br> -->
                    
</div>
            
        </div>
<?php include "includes/footer.php"; ?>