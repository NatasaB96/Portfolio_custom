jQuery(document).ready(function(){
    jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
        }
    })
});

$(window).on('scroll', function() {
    var scroll = $(window).scrollTop();
    if(scroll >= 50) {
        $('.fixed-top').addClass('sticky');
    } else {
        $('.fixed-top').removeClass('sticky');
    }
});


jQuery(document).ready(function($) {
    $(".search_icon").click(function() {
      $(".spicewpsearchform").slideToggle();
    });
  
    $(document).keydown(function(e) {
      if (e.keyCode == 27) {
        //$(modal_or_menu_element).closeElement();
        $(".spicewpsearchform").hide();
      }
    });
  });