     $(".search-toggle").click(function() {
          $(".search-wrapper").slideToggle().toggleClass("active");
          
          return 0;
      });
      
      $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        var wrapper = $(".search-wrapper");
        
        if (scroll > 64) {
            wrapper.slideUp();
        }
        
//        if (scroll <= 64) {
//            wrapper.slideDown();
//        }
      });
      
      $(".front-carousel .carousel-init").slick({
          dots: true,
          fade: true,
          nextArrow: false,
          prevArrow: false
      });
      
      $(".slick-dots li button").addClass("btn-floating waves-effect waves-light red");


