<?php include "includes/header.php" ;
      include "includes/body.php" ;
    //   session_start();
      ?>

    <div class="container">
        <div class="the-user">
            <div class="sidebar-user">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->


                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <span>المعلومات الشخصيه</span>
                    <i class="far fa-address-card"></i>
                    </a>
                </li>

                <!-- Divider -->


                <!-- Nav Item - Tables -->

                <li class="nav-item">
                <a class="nav-link" href="products.php">
                
                    <span>المشتريات</span>
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="message.php">
                
                    <span>الرسائل</span>
                    <i class="far fa-envelope"></i>
                </a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="functions/logout.php">

                    <span>تسجيل الخروج</span>
                    <i class="fas fa-power-off"></i>
                </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                </ul>
            </div>
            

            <div class="body-user">
                    <span>.مرحباً بعودتك مره أخرى عميلنا العزيز</span><br>
                    <i class="fas fa-door-open"></i>
                    
            </div>

            <div class="evaluation">

                    <div class='data-eva'>
                        <div>
                            <i class="far fa-laugh-beam"></i>
                        </div>
                        <span>سعيد جدا</span>
                    </div>

                    
                    <div class='data-eva'>
                        <div>
                            <i class="far fa-smile"></i>
                        </div>
                        <span>سعيد</span>
                    </div>
                
                    <div class='data-eva'>
                        <div>
                            <i class="far fa-meh"></i>
                        </div>
                        <span>راضي</span>
                    </div>

                    
                    <div class='data-eva'>
                        <div>
                            <i class="far fa-frown"></i>
                        </div>
                        <span>غير راضي</span>
                    </div>
                
                    <div class='data-eva'>
                        <div>
                            <i class="far fa-angry"></i>
                        </div>
                        <span>غير راضي تماما</span>
                    </div>
            </div>
            
        </div>
        
    </div>        

    <?php include "includes/footer.php"; ?>