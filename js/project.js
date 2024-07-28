
$(document).ready(function(){
      $(window).scroll(function(){
        if(this.scrollY > 114.8 ){
          // console.log('welcome');
          $('.container-nav').addClass("fixed-nav");
          $('.parent-nav .container .container-nav').css('border-radius' , '0 0 0 0');
          $('.parent-nav .container .container-nav').css('height' , '60px');
        } else {
          $('.container-nav').removeClass("fixed-nav");
          $('.parent-nav .container .container-nav').css('border-radius' , '25px 25px 0 0' , 'height' , '100px');
          $('.parent-nav .container .container-nav').css('height' , '56px');



        }
      });
  });



  $(document).ready(function(){
    $(window).scroll(function(){
      if(this.scrollY > 400 ){

        $('#scroll').addClass("scrollUp");
      } else {
        $('#scroll').removeClass("scrollUp");

      }
    });
    $(".scrollUp").click(function(){
    //  $('html ,body').animate({scrollTop : 0},400);
      $('html ,body').scrollY(0);
  });
});

$(document).ready(function(){
  $(".parent-nav .log-user").click(function(){

    $(".parent-nav .formUser").toggle(500);
 
});
});


    var scrollUp = document.getElementById('scroll')

    scrollUp.onclick = function(){
      'use strict';
      window.scrollTo(0,0);
    }
    // ........................................................................
$(".card-text .vs button i").click(function(){
 
  // if($('.vsCar').css('left','-150px'))
      //   $('.vsCar').toggle(200);

      
  


//   if($(this).hasClass('fa-plus')){
//         $(this).removeClass('fa-plus').addClass('fa-minus');
//         $('.vsCar').animate({left: '0'});
        
//   } else if ($(this).hasClass('fa-minus')) {
//         $(this).removeClass('fa-minus').addClass('fa-plus');
//         $('.vsCar').animate({left: '-150px'});       
//   }
//  else if($('.vsCar').css('left','0px') && $(this).hasClass('fa-plus')){
//     $('.vs2').show();
//   } else if($('.vsCar').css('left','0px') && $(this).hasClass('fa-minus')) {
//     $('.vs2').hide();
//   }


// if($(this).hasClass('fa-plus')){

//     if($('.vsCar').css('left','-150px')){
//       $(this).removeClass('fa-plus').addClass('fa-minus').addClass('find');
//         $('.vsCar').animate({left: '0'});
//         $('.vsCar').addClass('find');

//     } else if ($('.vsCar').isset('find')){
//        $(this).removeClass('fa-plus').addClass('fa-minus');
//         $('.vsCar .vs2').show();
//     }

//  }  else if ($(this).hasClass('fa-minus')){

//     if($('.vsCar').css('left','0px') && $(this).hasClass('fa-minus')){
//         $(this).removeClass('fa-minus').addClass('fa-plus');
//         $('.vsCar').animate({left: '-150px'}); 

//     } else if ($('.vsCar').css('left','0px') && $(this).hasClass('fa-minus')){
//         $('.vs2').hide();
//     }
// }

let left = $('.vsCar').css('left');
let move = $('.moveCar')
let id = $(this).data('id');
let selphp = ``;

if($(this).hasClass('fa-plus')){

  if( left == '-150px'){
      $(this).removeClass('fa-plus').addClass('fa-minus');
      $('.vsCar').animate({left: '0'});
      $('.vsCar').addClass('moveCar');

  } else if (left == '0px'){
     $(this).removeClass('fa-plus').addClass('fa-minus');
      // $('.vsCar .vs2').show();
      // $('.vsCar').removeClass('.moveCar');
      $.post('../functions/checkId.php' , {id:id} , function(data){});
      $('.body-vs-car').append(`<?php $selectCar = "SELECT * FROM newCars WHERE id = '${id}' " ; $queryCar = $conn -> query($selectCar); $fetchCar = $queryCar -\> fetch_assoc(); $image = $fetchCar['image'];?> <div class="body-vCar"><hr><div class="image-vs"><img src="../image\logo\brands\<?=$image[0]?>.png" alt=""></div><div class="body-text"><h5><?= $fetchCar['name']?></h5></div></div>`);

  }

 } else if ($(this).hasClass('fa-minus')){

    if(left == '0px'){
      $(this).removeClass('fa-minus').addClass('fa-plus');
      // $('.vsCar').animate({left: '-150px'}); 
      // $('.vsCar').removeClass('.moveCar');
      $('.body-vs-car').children().last().remove();
      if ($(".body-vs-car > *").length === 0){
      $('.vsCar').removeClass('moveCar');
      $('.vsCar').animate({left: '-150px'});
    }


   } // else if (left == '0px'){
  //   $(this).removeClass('fa-plus').addClass('fa-minus');
  //   // $('.body-vCar').children().last().remove();
     
  // }
  
}
// let moveCar = $('body-vs-car');


//   if($('.vsCar').css('left','0') && $(this).hasClass('fa-minus')){
//     $('.vs2').hide();
// } else if ($('.vsCar').css('left','0') && $(this).hasClass('fa-plus')) {
//   $('.vs2').show();

// }
  
  $.post("../vs.php?id" , {id:id} ,function(data){}  );
  



  // $(".card-text .vs button ")
});   

// .css("left", "0");

// ............................

$('.newAccount input').click(function(){
  $(this).css('box-shadow','0', '0', '12px' ,'-4px');
});