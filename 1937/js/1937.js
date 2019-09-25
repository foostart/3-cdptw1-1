$(document).ready(function() {
  $('a').click(function(event) {
      /* Act on the event */
      if($('.nav a').hasClass('active')){
        $('.nav a').removeClass('active');
      } else {
        $('.nav a').addClass('active');
      }
      return false;
    });
});
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});


$(document).ready(function () {
var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
});
