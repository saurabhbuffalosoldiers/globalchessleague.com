jQuery(document).ready(function () {

	//Top header slider
	var swiper = new Swiper(".get_tickets_slider", {
    slidesPerView: 1,
   spaceBetween: 30,
   loop: true,
   speed: 5000,
   freeMode: true,
   autoplay: {
    delay: 1,
    disableOnInteraction: false,
  },
  freeModeMomentum: false,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1.5,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

    //home banner slider
    var swiper = new Swiper(".home_banner_slider", {
     slidesPerView: 1,
     spaceBetween: 10,
     loop: false,
     speed: 2000,
   });
   
   
       //gcl Banner slider
    var swiper = new Swiper(".gcl_banner_slider", {
     slidesPerView: 1,
     spaceBetween: 30,
     loop: false,
      autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
     speed: 1000,
     navigation: {
      nextEl: ".q-swiper-button.swiper-button-next",
      prevEl: ".q-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 1,
      },
    },
  });
   
   

    //gcl matches slider
    var swiper = new Swiper(".gcl_matches_slider", {
     slidesPerView: 1,
     spaceBetween: 30,
     loop: false,
     speed: 1000,
     navigation: {
      nextEl: ".a-swiper-button.swiper-button-next",
      prevEl: ".a-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 1,
      },
    },
  });

//highlights/post slider/focus_players_slider/tea_player_slider 
  function gcl_post_slider(slider_class, button_class){
    
    var swiper = new Swiper(slider_class, {
     slidesPerView: 1,
     spaceBetween: 30,
     loop: false,
     speed: 1000,
     autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
     navigation: {
      nextEl: "."+button_class+"-swiper-button.swiper-button-next",
      prevEl: "."+button_class+"-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
}
  gcl_post_slider('.highlight_slider', 'c');
  gcl_post_slider('.post_slider', 'd');
  gcl_post_slider('.focus_player_slider', 'e');

	// end ready function
    //super star slider//
  });  
     var focus_player_1 = new Swiper('.focus_player_slider_1', {
     slidesPerView: 1,
     spaceBetween: 30,
     loop: false,
     speed: 1000,
     autoplay: {
    delay: 6500,
    disableOnInteraction: false,
  },

     navigation: {
      nextEl: ".g-swiper-button.swiper-button-next",
      prevEl: ".g-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
      
});

 var focus_player_1 = new Swiper('.focus_player_slider_2', {
     slidesPerView: 1,
     spaceBetween: 30,
     loop: false,
     speed: 1000,
     autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },

     navigation: {
      nextEl: ".h-swiper-button.swiper-button-next",
      prevEl: ".h-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
      
});


// team slider
function gcl_post_slider(slider_class, button_class){
    
    var swiper = new Swiper(slider_class, {
     slidesPerView: 2,
     spaceBetween: 30,
     loop: false,
     speed: 1000,
     navigation: {
      nextEl: "."+button_class+"-swiper-button.swiper-button-next",
      prevEl: "."+button_class+"-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 6,
      },
    },
  });
}
  gcl_post_slider('.team_player_slider', 'f');


  window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("masthead").style.padding = "0px 40px";
  } else {
    document.getElementById("masthead").style.padding = "15px 40px";
  }
}
