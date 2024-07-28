<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tasck12</title>
        <style>
                body {
                        height: 1111px;
                }

                .claer {
                        margin-right: 25%!important;
                }

                .containe {
                        margin-left: 1500px;
                        width: 200px;
                        height: 300px;
                        background: red;
                        position: absolute;


                }

                button {
                        border-radius: 20%;


                }

                img {
                        float: right;
                        border-radius: 20%;
                        width: 30px;
                        height: 30px;

                }
        </style>

</head>

<body>

       
        <img src="../images/4.jpg" width="30px" height="30px">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js\jquery-3.5.1.min.js"></script>

        <script>
                $('img').click(function () {

                        $('.newAccount').toggleClass('claer')

                })
        </script>
</body>

</html>

<?php
    include "includes/header.php";
    include "includes/body.php";
    require_once "functions/connect.php";


?>

<div class="container">
<button class="sd">شراء</button>
    <div class="bodyAccount">
        <div class="newAccount" style="margin-right: -60%;">
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
                        
                    
</div>
            
        </div>
<?php include "includes/footer.php"; ?>