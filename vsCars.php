<?php 
    require_once "includes/header.php";
    require_once "includes/body.php";
    require_once "functions/connect.php";
?>
    
    <div class="container">
        <div dir="rtl" class="conVs bg-white">
            <h3 class="pt-4">VS</h3>
            <form method="post" action="functions/checkVs.php">
                <div class="inputs pt-4">
                    <div class="input1">إختر السيارة الأولي <span><i class="fas fa-angle-down"></i></span> </div>
                    <div class="input2">إختر السيارة الثانية <span><i class="fas fa-angle-down"></i></span></div>
                </div>
                <div class="searchAndLest">

                
                <div class="inputSearch">
                    <input class="search1" type="search" name="search1">
                    <input class="search2" type="search" name="search2">
                </div>
                <div class="lests">
                    <div class="lest1">
    <?php
        $selectCars = "SELECT * FROM newcars";
        $queryCars = $conn -> query($selectCars);
        foreach($queryCars as $cars){
    ?>
                        
                            <li class="li1"><?= $cars['name'] ?></li>

                            <?php } ?>
                    </div>
                    <div class="lest2">
                        <?php
                    foreach($queryCars as $cars){ ?>
                            <li class="li2"><?= $cars['name'] ?></li>

                            <?php } ?>

                        
                        
                    </div>
                    </div>
                </div>
                <button class="btn btn-vs" >قارن</button>
            </form>
        </div>
    </div>
<script>
        var inputBox1 = document.querySelector(".search1");
        var inputBox2 = document.querySelector(".search2");

        var searchAndLest1 = document.querySelectorAll(".li1");
        var searchAndLest2 = document.querySelectorAll(".li2");

        // var divLest = document.querySelector(".lest1");

        inputBox1.addEventListener('input' , filter);
        function filter () {
            search = inputBox1.value;

            searchAndLest1.forEach(function(li){
                text = li.innerHTML;
                found = text.indexOf (search);

                if(search == '' || found != -1 ){
                    li.style.display = 'block';
                } else if (found == -1){
                    li.style.display = 'none'; 
                }
            })
        }

        inputBox2.addEventListener('input' , filterr);
        function filterr () {
            search = inputBox2.value;

            searchAndLest2.forEach(function(li){
                text = li.innerHTML;
                foundd = text.indexOf (search);

                if(search == '' || foundd != -1 ){
                    li.style.display = 'block';
                } else if (foundd == -1){
                    li.style.display = 'none'; 
                }
            })
        }
      
        // let allLest = divLest.querySelectorAll('.li1');
        //     allLest.setAttribute('onclick', 'select(this');
        // function select(element){
        //     let selectValue = element.textContent;
        //     console.log(selectValue);
        // }
    </script>

<?php 
    require_once "includes/footer.php";
?>
<script>
  $(".li2").click(function(){
            $('.search2').val($(this).text()) ;
    });
    $(".li1").click(function(){
            $('.search1').val($(this).text()) ;
    });
</script>