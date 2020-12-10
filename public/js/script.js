$(function(){
    $(".scroll a").on('click', function(){
        $("html, body").animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 600);
    });
});

$(window).scroll(function(){
    var threshold = 1000; 
    var op = (($(document).height() - $(window).height()) - $(window).scrollTop()) / threshold;
      if( op <= 0 ){
          $(".funfact").hide();
      } else {
          $(".funfact").show();
      }
      $(".funfact").css("opacity", op ); 
  });
