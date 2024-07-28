<body>
<?php 
session_start();
    // echo $id = $_POST['id'];
    //  if (!isset($_POST['id'])){
    // }else {
    //     echo $id = $_POST['id'] . '<div style="width:200px;height:200px;background-color:red">grjry</div>';
    // }
    
    
?>
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
                            <input type="search" placeholder="Search">
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
                        <!-- <div class="form-user">
                            <i class="fas fa-user"></i>
                        </div> -->
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