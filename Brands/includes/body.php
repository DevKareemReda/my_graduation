<body>
<?php 
 
    //  if (!isset($_POST['id'])){
    // }else {
    //     echo $id = $_POST['id'] . '<div style="width:200px;height:200px;background-color:red">grjry</div>';
    // }
    // session_start();
    // require_once "functions/connect.php";

    
    
?>

<div class="vsCar ">
    <div class="header-vs">
        <span>سيارة في المقارنه</span>
        <i class="fas btn fa-angle-left"></i>
    </div>
    <div class="body-vs-car">
<?php
    include "../functions/connect.php";
    // $selectCar = "SELECT * FROM newCars WHERE id = ''";$queryCar = $conn -> query($selectCar);$fetchCar = $queryCar -> fetch_assoc();

?>
        <div class="body-vCar">
            <div class="image-vs">
                <img src="../image/logo/brands/218i1.png" alt="">
            </div>
            <div class="body-text">
                <h5>نيسان صاني</h5>
            </div>
        </div>

    </div>
    <!-- <div class="location-vs">
        <a class="btn" href="">قارن</a>
    </div> -->

    <!-- <div class="vs2"><hr>
        <div class="image-vs">
            <img src="../image/logo/brands/218i1.png" alt="">
        </div>
        <div class="body-vs">
            <h5>نيسان صاني</h5>
        </div>
    </div> -->

    <div class="location-vs">
            <a class="btn" href="">قارن</a>
        </div>
</div>

    <div class="parent-nav">
        <div class="container">
            <div class="container-one">
                <div class="row">
                    <div class="col col-lg-2 col-sm-3 col-12">
                        <div class="logo ml-1 ">
                             <a class="navbar-brand" href="../index.php"><span>Delta</span> <span>Motors.</span></a>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-sm-6 col-12 offset-md-1 offset-sm-2">
                        <div class="search">
                            <input type="search" placeholder="البحث عن سياره">
                            <div class="icon_search">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col offset-lg-1 col-1">
                        <?php
                            if(isset($_SESSION['id'])){ ?>
                                <div class="form-user">
                                     <i class="fas fa-user"></i>
                                </div>
                         <?php   } else {?>
                        <button class="btn log-user" href="">تسجيل الدخول</button>
                        
                        <form action="functions/checkloginUser.php" method="post" class=" formUser p-4">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                            </div>
                            
                            <button  class="btn btnForm m-auto">تسجيل الدخول</button>

                                <a class="newAccount" href="">إنشاء حساب</a>
                        </form>
                     <?php    } ?>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col col-12 "> -->
                    <div class="container-nav">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse  " id="navbarNavDropdown">
                              <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                  <a class="nav-link" href="#">قطع الغيار</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">المعارض</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">الصيانه</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">تأجير سيارات</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="#">سيارات مستعمله</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="../newCars.php">سيارات جديده</a>
                                </li> 
                              </ul>
                            </div>
                          </nav>
                       </div> 
                </div>
            </div>
               
            
        </div>
    </div>