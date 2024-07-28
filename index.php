<?php 
include "includes/header.php";
include "includes/body.php";
?>

        <div class="parent-body">
            <div class="container">
                <div class="container-card">

<!-- start card one ( الأكثر مبيعا ) -->
                    <div class="the-card pt-3">
                        <h2 dir="rtl" class="mr-3 ">الأكثر مبيعاَ</h2>
                        <div class="clear"></div>
                        <div class="row m-auto">

                            <form class="col col-lg-4 col-sm-6 col-12 ml-0.5" method="post" action="dataCar3.php">
                                <div class="parent-car">
                                    <div class="image-card">
                                        <img src="image/toyota.png" alt="">
                                        <div class="logo">
                                            <img src="image/logo/Toyota.png" alt="">
                                        </div>
                                        <div class="car">
                                            <h6>Toyota</h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text">

                                    <!-- <input type="hidden" name='id' value='12'> -->
                                    <!-- <input type="hidden" name='name' value='كياسبورتاج'> -->

                                        <h4 class="mb-3">تيوتا كرولا</h4>
                                        <a href="dataCar3.php?id= 115" class="btn mr-auto">عرض التفاصيل</a>
                                        <!-- <button class="btn mr-auto">عرض التفاصيل</button> -->
                                    </div>
                                </div>
                            </form>

                            <div class="col col-lg-4 col-sm-6 col-12 ml-0.5">
                                <div class="parent-car">
                                    <div class="image-card">
                                        <img src="image/Nissan-Sunny.png" alt="">
                                        <div class="logo">
                                            <img src="image/logo/nissan.png" alt="">
                                        </div>
                                        <div class="car">
                                            <h6>Nissan</h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text">
                                        <h4 class="mb-3">نيسان صني</h4>
                                        <a href="dataCar3.php?id=57" class="btn mr-auto">عرض التفاصيل</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-4 col-sm-6 col-12 ml-.05">
                                <div class="parent-car">
                                    <div class="image-card">
                                        <img src="image/kia-sportage (1).png" alt="">
                                        <div class="logo">
                                            <img src="image/logo/Kia.png" alt="">
                                        </div>
                                        <div class="car">
                                            <h6>Kia</h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text">
                                        <h4 class="mb-3">كيا إسبورتاج</h4>
                                        <a href="dataCar3.php?id= 12" class="btn mr-auto">عرض التفاصيل</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
<!-- end card one ( الأكثر مبيعا ) -->

                        <div class="parent-space m-auto">
                            <div class="space mt-5">
                            </div>
                        </div>

                        <div class="the-card pt-3">
                            <h2 class="">خصومات هذا العام</h2>
                            <div class="clear"></div>
                            <div class="row m-auto">
    
                                <div class="col col-lg-4 col-sm-6 col-12 ml-0.5">
                                    <div class="parent-car">
                                        <div class="image-card">
                                            <img src="image/logo/brands/Q21.png" alt="">
                                            <div class="sale">
                                                <span>sale </span>
                                                <span>9%</span>
                                            </div>
                                            <div class="car">
                                                <h6>اوديQ2</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="text">
                                            <h4 class="mb-3">  اوديQ2</h4>
                                            <a href="dataCar3.php?id=77" class="btn mr-auto">عرض التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col col-lg-4 col-sm-6 col-12 ml-0.5">
                                    <div class="parent-car">
                                        <div class="image-card">
                                            <img src="image/logo/brands/Qashqai1.png" alt="">
                                            <div class="sale">
                                                <span>sale </span>
                                                <span>9%</span>
                                            </div>
                                            <div class="car">
                                                <h6>Nissan</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="text">
                                            <h4 class="mb-3"> نيسان قشقاي </h4>
                                            <a href="dataCar3.php?id= 60" class="btn mr-auto">عرض التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col col-lg-4 col-sm-6 col-12 ml-.05">
                                    <div class="parent-car">
                                        <div class="image-card">
                                            <img src="image/logo/brands/CLA2001.png" alt="">
                                            <div class="sale">
                                                <span>sale </span>
                                                <span>5%</span>
                                            </div>
                                            <div class="car">
                                                <h6>مرسيدس</h6>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="text">
                                            <h4 class="mb-3"> مرسيدس CLA200</h4>
                                            <a href="dataCar3.php?id= 131" class="btn mr-auto">عرض التفاصيل</a>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        <div class="parent-space m-auto">
                            <div class="space mt-5">
                            </div>
                        </div>

                </div>      <!--  end card-1 -->

                

             </div>  <!-- end container -->
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />

<?php 

    require_once "includes/footer.php";
?>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script>
    $("#search").keyup(function () {
    data = $('#search').val();
    $("#search").autocomplete({
        source: "searchajax.php?data=" + data,
});
});
</script>