$( document ).ready(function() {
  
  $('.testimonials-section .testimonials-container').slick({
    centerMode: true,
    centerPadding: '250px',
    slidesToShow: 1,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 1441,
        settings: {
          centerPadding: '100px',
        }
      },
      {
        breakpoint: 769,
        settings: {
          centerMode: false
        }
      }
    ]
  });
  
  $('.slick-me').slick({
    nextArrow: '<button class="custom-slick-arrow custom-slick-next border-2 border-white rounded-full p-2"><img src="./assets/images/arrow-right.svg" class="w-8 h-8" /></button>',
    prevArrow: '<button class="custom-slick-arrow custom-slick-prev border-2 border-white rounded-full p-2"><img src="./assets/images/arrow-left.svg" class="w-8 h-8" /></button>'
  });

  $("#scrollForMore").click(function (){
    $('html, body').animate({
        scrollTop: $(".our-story-section").offset().top
    }, 500);
  });

  var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    $('.site-header nav').toggleClass('mobile-active');
    $('body').toggleClass('overflow-hidden');
  });

});