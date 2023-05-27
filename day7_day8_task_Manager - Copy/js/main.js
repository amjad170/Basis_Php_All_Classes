    $(document).ready(function(){

         //preloader
     $(window).on("load",function(){
        $(".preloader").fadeOut(5000)
    })


    
    // scroll to top
  
    $(window).scroll(function(){
        if($(this).scrollTop()>200){
            $(".scroll-to-top").fadeIn()
        }else{
            $(".scroll-to-top").fadeOut()
        }
    });

    $(".scroll-to-top").on("click",function(){  // id dore o kora jay
        $("html,body").animate({
            "scrollTop":"0"
        })
    })

    new WOW().init(); 
    

<<<<<<< HEAD
    })
    
=======


    //slick Slider
    $('.your-class').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        loop:true,
        autoplay:true,
        autoplaySpeed:2000,
        centerMode: true,
        centerPadding:'px',
        arrow:true,
        // prevArrow:'<button type="button" class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
        prevArrow:'<button type="button" class="slick-prev">Previous</button>',
        nextArrow:'<button type="button" class="slick-next">Next</button>',
        // nextArrow:'<button type="button" class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>',
        dots:true,
        dotsClass:'slick-dots',
        speed:300,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
      });

      


    })
    

>>>>>>> e92d6a0f0cd34e7205c23192afa9768e3eb13d71
   
