

<?php
session_start();

if (isset($_SESSION['login_id'])) {
header("location: Index.php");

exit();
}

?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body  style="background-image:url(images/car.jpeg) ;  background-size: 100% 100%;">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line" style="height: 0px;"></div>
    <div class="container-fluid" >
        <div class="row"  >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <!-- <a href="index.html" class="btn btn-primary" style="background-color:#152036;">Back to Dashboard</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid " >
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3 style="font-size: 50px; color:beige;text-shadow: 4px -3px 10px gold, 3px 3px 6px pink;">مرحبا بك </h3>
                    <p style="font-size: 50px; color:beige;text-shadow: 4px -3px 10px gold, 3px 3px 6px pink;"> يرجى تسجيل الدخول  </p>
                </div>
                <div class="hpanel" >
                    <div class="panel-body" style="font-size: 17px;background: #fff; opacity:.7; color:#000;border-radius: 30%;height: 350px;border: 1px solid #000" >
                        <form  role="form" method="post" action="Function/Admin/LoginCheckAdmin.php" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username" style="margin-right: 35px;">الاسم</label>
                                <input type="text" placeholder=" الاسم" title="من فضلك أدخل الاسم" required value="" name="name" id="username" class="form-control"style="background: #000;border-radius:20px;">
                                <!-- <span class="help-block small">اسم المستخدم الفريد الخاص بك للتطبيق</span> -->
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">كلمة السر</label>
                                <input type="password" title="من فضلك أدخل رقمك السري" placeholder="كلمة السر" required value="" name="password" id="password" class="form-control"style="background: #000;border-radius:25px;">
                                <!-- <span class="help-block small">كلمة مرورك القوية</span> -->
                            </div>
                         
                            <button class="btn btn-success btn-block loginbtn "style="font-size: 15px;margin-top: 40px;border-radius:25px;">تسجيل دخول</button>
                            <!-- <a class="btn btn-default btn-block" href="#" style="font-size: 15px;background:darkgrey;color:beige">Register</a> -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <!-- <p>Copyright © 2021 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p> -->
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>