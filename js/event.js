$(document).ready(function(){
    $(window).scroll( function(){
        $('.left_box').each( function(i){
            
            var bottom_of_element = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_element ){
                $(this).animate({'opacity':'1','margin-left':'0px'},1000);
            }
        }); 
    });
    $('.slide').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          autoplay: true,
          draggable: false,
          touchMove: false,
          accessibility: false,
          swipeToSlide: false,
          arrows:false,
          pauseOnHover: false,
          pauseOnFocus: false,
          focusOnSelect: false,
          autoplaySpeed: 1000,
          responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  }); 
});