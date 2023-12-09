$(function(){



  // preloder 
  const preLoader = function () {
    let preloaderWrapper = document.getElementById("preloader");
    window.onload = () => {
      let isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test( navigator.userAgent) ? true : false;
      if (!isMobile) {
        setTimeout(function () {
          preloaderWrapper.classList.add("preloaded");
        }, 300);
        setTimeout(function () {
          preloaderWrapper.remove();
        }, 1000);
      } else {
        preloaderWrapper.remove();
      }    
    };
  };
  preLoader();


  



    
// mobile nav
 const openBtn = document.querySelector("#nav-opn-btn");
 const closeBtn = document.querySelector("#nav-cls-btn");
 const offcanvasContainer = document.querySelector("#offcanvas-nav");
 
 function openNav() {
   document.body.style.overflowY = "hidden";
   offcanvasContainer.classList.add("open");
 }
 
 function closeNav() {
   document.body.style.overflowY = "";
   offcanvasContainer.classList.remove("open");
 }
 
 openBtn.addEventListener("click", openNav);
 closeBtn.addEventListener("click", closeNav);




    // sarch js
    
    $(document).on('click', '.search-icon', function () {
        $(".search-input-area").addClass("show");
      });
      $(document).on('click', '.search-input-area input', function () {
        $(".search-input-area").addClass("show");
      });
      $(document).on('click', '.search-input-inner before', function () {
        $(".search-input-area").addClass("show");
      });
      $('html').click(function (e) {
        if (!$(e.target).hasClass('show')) {
          $(".search-input-area").removeClass("show");
        }
        $(document).on('click', '.search-close-icon', function () {
          $(".search-input-area").removeClass("show");
        });
      });




  // back to top
  $(" .back-to-top ").click(function () {
    $("html,body").animate({
      scrollTop: 0,
    });
  });

  $(window).scroll(function () {
    var scrolling = $(this).scrollTop();

    if (scrolling > 50) {
      $(".menu-bg").addClass("nav-bg");
    } else {
      $(".menu-bg").removeClass("nav-bg");
    }

    var scrolling = $(this).scrollTop();
    if (scrolling > 20) {
      $(".back-to-top ").fadeIn(500);
    } else {
      $(".back-to-top ").fadeOut(500);
    }
  });




  $('.project-page-arrow li').on('click', function () {
    // set active class
    $('.project-page-arrow li').removeClass('active');
    $(this).addClass('active');
});



// banner-logo-slick 

$('.banner-logo-slick').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  arrows:false,
  autoplay:true,
  autoplaySpeed: 100,
  speed: 8500,

  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
      }
    },

  ]


});




// our-clients-slick

$('.our-clients-slick').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed: 2000,
  speed: 2000,
  prevArrow:".prev",
  nextArrow:".next"
});



// team-slick-slick

$('.team-slick').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed: 2000,
  speed: 2000,
  arrows:false,
  dots:true,
  centerMode: true,
  centerPadding: '0',


  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 3,
      }
    },

  ]
});



// our-clients-two-slick-main

$('.our-clients-two-slick-main').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed: 2000,
  speed: 2000,
  arrows:true,
  dots:false,
  prevArrow:".left",
  nextArrow:".right"
});
		




// counterUp js 
    $('.counter').counterUp({
        delay: 10,
        time: 3000
    });



    // venu-box 
    new VenoBox({
      selector: ".my-video-links"
  });



});