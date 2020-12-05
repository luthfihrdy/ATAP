$(function(){
    $(".scroll a").on('click', function(){
        $("html, body").animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 600);
    });
});
