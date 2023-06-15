<section class="footer_client bg-dark" id="footer_client">
                        <div class="container">
                           <div class="row pb-4 pt-4 pt-md-0">
                                <div class="col-12 text-white text-center"><p>&copy; 2023, Global Chess League. All Rights Reserved.</p></div>
                            </div>
                            
                        </div>
                    </section>
    
   <script>document.body.classList.remove("no-js");</script>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src='https://globalchessleague.com/wp-includes/js/hoverintent-js.min.js?ver=2.2.1' id='hoverintent-js-js'></script>
<script src='https://globalchessleague.com/wp-includes/js/admin-bar.min.js?ver=a9a422326f6da7fd27da4cb29c17b989' id='admin-bar-js'></script>
<script id='twenty-twenty-one-ie11-polyfills-js-after'>
( Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach ) || document.write( '<script src="https://globalchessleague.com/wp-content/themes/twentytwentyone/assets/js/polyfills.js?ver=1.0.0"></scr' + 'ipt>' );
</script>
<script src='https://globalchessleague.com/wp-content/themes/twentytwentyone/assets/js/primary-navigation.js?ver=1.0.0' id='twenty-twenty-one-primary-navigation-script-js'></script>
<script src='https://globalchessleague.com/wp-content/themes/twentytwentyone/assets/js/responsive-embeds.js?ver=1.0.0' id='twenty-twenty-one-responsive-embeds-script-js'></script>
		<script>
		/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
		</script>
		
<!-- custom script  -->
<link rel="stylesheet" type="text/javascript" href="https://globalchessleague.com/wp-content/themes/twenty-twenty-one-child/assets/bootstrap_5_2_3/js/bootstrap.bundle.min.js">


	 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
         <script>
             $(document).ready(function () {
	function makeTimer() {

	               var endTime = new Date("21 June 2023 9:56:00 GMT+01:00");			
			endTime = (Date.parse(endTime) / 1000);

			var now = new Date();
			now = (Date.parse(now) / 1000);

			var timeLeft = endTime - now;

			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (days < "10") { days = "0" + days; }
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }

			$("#days").html(days + "<span>Days</span>");
			$("#hours").html(hours + "<span>Hours</span>");
			$("#minutes").html(minutes + "<span>Minutes</span>");
			$("#seconds").html(seconds + "<span>Seconds</span>");		

	}

	setInterval(function() { makeTimer(); }, 1000);
});

             // Banner slider
             var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 2,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper = new Swiper(".mySwiper2", {
            loop: true,
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
        thumbs: {
        swiper: swiper,
      },
    });
// timer



// sponser-slider

    var swiper_team = new Swiper('.sponser_slider', {
     slidesPerView: 1,
     spaceBetween: 30,
     loop: true,
     speed: 1000,
     navigation: {
      nextEl: ".f-swiper-button.swiper-button-next",
      prevEl: ".f-swiper-button.swiper-button-prev",
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



    // blog-slider

    var swiper_team = new Swiper('.post_slider', {
     slidesPerView: 1,
     spaceBetween: 0,
     loop: true,
     speed: 1000,
     navigation: {
      nextEl: ".g-swiper-button.swiper-button-next",
      prevEl: ".g-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 2,
      },
    },
  });


    // team_slider

    var swiper_team = new Swiper('.team_slider', {
     slidesPerView: 2,
     spaceBetween: 0,
     loop: false,
     speed: 1000,
     navigation: {
      nextEl: ".g-swiper-button.swiper-button-next",
      prevEl: ".g-swiper-button.swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 6,
      },
    },
  });


  </script>

<!--<script type="text/javascript" src="https://globalchessleague.com/wp-content/themes/twenty-twenty-one-child/scripts.js"></script>-->
<?php wp_footer('footer-2'); ?>
    </body>
</html>