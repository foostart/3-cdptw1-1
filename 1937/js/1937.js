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
   $(".my-rating-8").starRating({
        strokeColor: '#894A00',
        strokeWidth: 10,
        starSize: 20,
  });
});
