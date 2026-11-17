<!--Footer -->
    <footer class="py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container pt-lg-5 pt-md-5 pt-sm-4 pt-3">
        <div class="mb-lg-4">
          <div class="row ">
            <div class="dance-agile-info col-lg-4 col-md-4">
              <h4 class="pb-lg-4 pb-md-3 pb-3 text-white">About Us</h4>
              <div class="subscribe-footer">
                <p class="text-left mb-lg-4 mb-md-3 mb-3">Javy Software offers a variety of IT services
                  Software Development - Website development, Android App development, Graphic Design, Social Media Management.
                  <br/><br/>
                  Javy Software is a Javy Technologies company. 


                </p>
                <!-- <form action="#" method="post">
                  <div class="subscribe-form ">
                    <div class="contact-subscribe">
                      <input type="email" class="form-control" placeholder="Your Email" required="">
                    </div>
                    <div class="click-subscribe">
                      <button type="submit" class="btn click-me">Subscribe</button>
                    </div>
                  </div>
                </form> -->
              </div>
            </div>
            <div class="dance-agile-info col-lg-4 col-md-4">
              <h4 class="pb-lg-4 pb-md-3 pb-3 text-white">Nav Links</h4>
              <nav class="border-line">
  <ul class="nav flex-column">
    <?php
      // Get the current path from the URL
      $currentPath = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
      if ($currentPath === '') $currentPath = 'index'; // default home page
    ?>
    <li class="nav-item <?php if($currentPath=='index'){ echo 'active'; } ?>">
      <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item <?php if($currentPath=='about'){ echo 'active'; } ?>">
      <a class="nav-link" href="/about">About</a>
    </li>
    <li class="nav-item <?php if($currentPath=='projects'){ echo 'active'; } ?>">
      <a class="nav-link" href="/gallery">Projects</a>
    </li>
    <li class="nav-item <?php if($currentPath=='contact'){ echo 'active'; } ?>">
      <a class="nav-link" href="/contact">Contact</a>
    </li>
  </ul>
</nav>

            </div>
            <div class="dance-agile-info col-lg-4 col-md-4">
              <h4 class="pb-lg-4 pb-md-3 pb-3 text-white">Contact Us</h4>
              <div class="footer-office-hour">
                <ul>
                  <li>
                    <p>Phone Number: 0707 641174</p>
                  </li>
                  <li class="my-1">
                    <p><a href="mailto:software@javytech.com" data-blast="color">Email : software@javytech.com</a></p>
                  </li>

                 
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="icons text-center py-3">
          <ul>
            <li><a href="https://www.facebook.com/javysoftware"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="mailto:software@javytech.com"><span class="fas fa-envelope"></span></a></li>
            
            
          </ul>
        </div> -->
        <div class="footer-bottom ">
          <p>©2025 Javy. All Rights Reserved | Design by <a href="https://javysoftware.av.ke" target="_blank">Javy Software</a> | A <a href="https://www.javytech.av.ke">Javy Technologies</a> Company</p>
        </div>
      </div>
    </footer>
    <!-- //Footer -->
    <!--js working-->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!--//js working-->
    <!--search-bar-->
    <script src="js/main.js"></script>
    <!--//search-bar-->
    <!--responsiveslides banner-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
      // You can also use "$(window).load(function() {"
      $(function () {
      	// Slideshow 4
      	$("#slider4").responsiveSlides({
      		auto: true,
      		pager:false,
      		nav:true ,
      		speed: 900,
      		namespace: "callbacks",
      		before: function () {
      			$('.events').append("<li>before event fired.</li>");
      		},
      		after: function () {
      			$('.events').append("<li>after event fired.</li>");
      		}
      	});
      
      });
    </script>
    <!--// responsiveslides banner-->	  
    <!--About OnScroll-Number-Increase-JavaScript -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
      $('.counter').countUp();
    </script>
    <!-- //OnScroll-Number-Increase-JavaScript -->
    <!-- clients FlexSlider-JavaScript -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script>
      $(window).load(function(){
      $('.flexslider').flexslider({
      	animation: "slide",
      	start: function(slider){
      		$('body').removeClass('loading');
      	}
      });
      });
    </script>
    <!-- //clients FlexSlider-JavaScript -->
    <!-- start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
      jQuery(document).ready(function ($) {
      	$(".scroll").click(function (event) {
      		event.preventDefault();
      		$('html,body').animate({
      			scrollTop: $(this.hash).offset().top
      		}, 900);
      	});
      });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- here stars scrolling icon -->
    <script>
      $(document).ready(function () {
      
      	var defaults = {
      		containerID: 'toTop', // fading element id
      		containerHoverID: 'toTopHover', // fading element hover id
      		scrollSpeed: 1200,
      		easingType: 'linear'
      	};
      
      
      	$().UItoTop({
      		easingType: 'easeOutQuart'
      	});
      
      });
    </script>
    <!-- //here ends scrolling icon -->
    <!--bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //bootstrap working-->
  </body>
</html>
