
<style>

.active{
  color:#eb3d32 !important;
   position: relative;
  }
  .active::after{
    background-color: #eb3d32;
    width: 100%;
    bottom: -5%;
    position: absolute;
    transition: 0.5s;
    content:"";
    height: 2.5px;
    left: 0;
    /* color:#eb3d32; */
  }


</style>

<body>

<div class="vsCar">
    <div class="header-vs">
        <span>سيارة في المقارنه</span>
        <i class="fas btn fa-angle-left"></i>
    </div>
    <div class="image-vs">
        <img src="image/logo/brands/218i1.png" alt="">
    </div>
    <div class="body-vs">
        <h5>نيسان صاني</h5>
    </div>
    <!-- <div class="location-vs">
        <a class="btn" href="">قارن</a>
    </div> -->
<hr>

    <div class="image-vs">
        <img src="image/logo/brands/218i1.png" alt="">
    </div>
    <div class="body-vs">
        <h5>نيسان صاني</h5>
    </div>
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
                             <!-- <a class="navbar-brand" href="index.php"><span>Delta</span> <span>Motors.</span></a> -->
                             <a href="index.php"><img style="width:100%" src="image/automotive-car-logo_98765-30.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-sm-6 col-12 offset-md-1 offset-sm-2">
                        <form class="search" method="psot" action="dataCar2.php">
                            <input type="search" placeholder="البحث عن سياره" calss="search" name="search"id="search">
                            
                                       <div class="lest1" >
                                                <?php
                                            $db = mysqli_connect('localhost', 'root', '', 'project_car'); 
                                                $selectCars = "SELECT * FROM newcars WHERE name LIKE'%%'";

                                                    $queryCars =  $db  -> query($selectCars);
                                                    
                                                
                                                    foreach($queryCars as $cars){
                                                ?>
                                            
                                                <li class="li1" style="display:none;" ><?= $cars['name'] ?></li>

                                                <?php } ; ?>
                                               
                                          
                               

                            
                                    
                                        </div>          
                  
                            
                                        <button class="icon_search">
                                <i class="fas fa-search"></i>
                                </button>  
                        </form>
                    </div>
              


                    
                    <div class="col offset-lg-1 col-1">
                        <button class="btn log-user" href="">تسجيل الدخول</button>
                        
                        <form action="functions/checkloginUser.php" method="post" class="formUser p-4">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail2">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword2">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                            </div>
                            
                            <button  class="btn btnForm m-auto">تسجيل الدخول</button>

                                <a class="new-Account" href="newAccount.php">إنشاء حساب</a>
                        </form>
                        <!-- <div class="form-user">
                            <i class="fas fa-user"></i>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col col-12 "> -->
                <?php 
$first_part = basename($_SERVER['PHP_SELF'], ".php");
?>
                    <div class="container-nav">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse  " dir="rtl" id="navbarNavDropdown">
                              <ul class="navbar-nav m-auto">
                                <li class=" nav-item  " >
                                    <a class="nav-link <?= ($first_part == 'newCars') ? 'active':''; ?> " href="newCars.php">سيارات جديده</a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link <?= ($first_part == 'usedCars') ? 'active':''; ?> " href="usedCars.php">سيارات مستعمله</a>
                                </li> 
                                <li class="nav-item ">
                                    <a class=" nav-link <?= ($first_part == 'rentCars') ? 'active':''; ?> " href="rentCars.php">تأجير سيارات</a>
                                </li> 
                                <li class="  nav-item ">
                                    <a class="nav-link <?= ($first_part == 'Maintenance') ? 'active':''; ?> " href="Maintenance.php">الصيانه</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($first_part == 'vsCars ') ? 'active':''; ?> " href="vsCars.php">قارن بين سيارتين</a>
                                </li>
                                <li class="nav-item ">
                                  <a class="<?= ($first_part ==  '#') ? 'active':''; ?>nav-link" href="#" data-toggle="modal" data-target="#exampleModal1"> اتصل بنا </a>
                                  <div style="transition: 0.7s;" class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content" style="">
                                    <div class="modal-header" style="background: #eb3d32">
                                      <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                        <span aria-hidden="true" style="color:#fff">&times;</span>
                                      </button>
                                      <p style="margin-left: 35%;color: #fff;font-size: 20px;">دائما في خدمتك</p>
    
    
                                    </div>
                                    <div class="modal-body m-auto">
                                         <!-- 01065942071:خدمةالعملاء<i class="fa fa-phone" style="width:30px"></i> -->
                                         <div class="w3-col m6 w3-large w3-margin-bottom">
                                         <!-- <i class="bi bi-facebook"></i> -->
                                         
                                         <i class="fab fa-facebook-square" style="color: #eb3d32; font-size: 30px;"><a href="https://www.facebook.com/ahmed.mofreh.56614" style="color:#000">  <b style="font-size: 25px;">Facebook : </b><span style="color: #000;font-size: 22px;font-weight: 100;">  DELTA_MOTORS</span></a></i><br><br>

                                         <i class="fas fa-phone-alt"style="color: #eb3d32; font-size: 30px;"> <b style="font-size: 25px; color: #000;">Phone : </b><span style="color: #000;font-size: 22px;font-weight: 100;"> 01065942071 </span></i><br><br>
                                         <i class="fas fa-envelope"style="color: #eb3d32; font-size: 30px;"> <b style="font-size: 25px; color: #000;"> Gmail : </b><span style="color: #000;font-size: 22px;font-weight: 100;"> DELTA_MOTORS @gmail.com </span></i><br><br>
                                         
                                            </div>
                                    </div>
                                    <div class="modal-footer m-auto"style="background:#eb3d32;width: 100%">
                                    </div>
                                  </div>
                                </div>
                              </div>
                                </li>
                                <!-- <li class="nav-item">
                                  <a class="nav-link" href="#">المعارض</a>
                                </li> -->
                                
                               
                                
                                
                              </ul>
                            </div>
                          </nav>
                       </div> 
                </div>
            </div>
               
            
        </div>
    </div>

<!-- 
    <script>
        var inputBox1 = document.querySelector(".search");
        

        var searchAndLest1 = document.querySelectorAll(".li1");
        

        inputBox1.addEventListener('input' , filter);
        function filter () {
            search = inputBox1.value;

            searchAndLest1.forEach(function(li){
                text = li.innerHTML;
                found = text.indexOf (search);

                if(search == ' ' ){
                    li.style.display = 'none';
                } else if (found == -1){
                    li.style.display = 'block'; 
                }
            })
        }

        
    </script> -->
 
<!-- Script -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
 
<!-- jQuery UI -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" /> -->
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> -->
 
<!-- Bootstrap Css -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- <script type="text/javascript">
  $(function() {
     $( "#search" ).autocomplete({
       source: 'searchajax.php',
     });
  });
</script> -->