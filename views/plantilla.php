<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="es">
   <head>
      <title>Hotel zone a Hotel and Resturant Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Hotel zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="views/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
     <link rel="stylesheet" href="views/css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
      <!-- //font-awesome icons -->
	  <link href="views/css/simpleLightbox.css" rel='stylesheet' type='text/css' />
      <!--stylesheets-->
	  <link rel="stylesheet" href="views/css/flexslider.css" type="text/css" media="screen" property="" />
      <link href="views/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
   </head>
   <body>
   <!-- Navigation -->
<header>
	<div class="top-nav">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand text-uppercase" href="index">Hotel Byte</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center pr-md-4" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#about">Nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#services">Servicios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#gallery">Galería</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link scroll" href="#contact">Contacto</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<!-- //Navigation -->
<!--Slider-->

<?php

include "views/modules/slide.php";

include "views/modules/nosotros.php";

include "views/modules/servicios.php";

include "views/modules/galeria.php";

include "views/modules/habitaciones.php";




		

?>

<!--//Slider-->
      <!-- //banner -->
	  <!-- welcome -->

<!-- //welcome -->

	  <!-- services -->


	
	<!-- //services -->

	  	<!--/Gallry-->
	
	<!--//gallery-->

	 <!-- rooms & rates -->
      
	 <!--// rooms & rates -->

	<!--//main-->

      <!-- Contact-form -->
      <div class="contact py-5" id="contact">
         <div class="container  py-md-3">
		 <div class="w3-head-all mb-3 w3-head-col">
		         <h3>Contactanos</h3>
		       </div>

			   
			 <div class="address-below">
            <div class="contact-icons text-center row">
               <div class="col-md-4 col-sm-4 col-xs-4 footer_grid_left">
                  <div class="icon_grid_left">
                     <span class="fas fa-map-marker" aria-hidden="true"></span>
                  </div>
                  <div class="address-gried">
                     <p><span>333 Broome St New York,Ny 10002,</span></p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 footer_grid_left">
                  <div class="icon_grid_left">
                     <span class="fas fa-phone" aria-hidden="true"></span>
                  </div>
                  <div class="address-gried">
                     <p><span>+(010) 123 4565 35</span></p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 footer_grid_left">
                  <div class="icon_grid_left">
                     <span class="fas fa-envelope-open" aria-hidden="true"></span>
                  </div>
                  <div class="address-gried">
                     <p>
                     	<span><a href="mailto:info@example.com">info@example2.com</a></span>
                     </p>
                  </div>
               </div>
               <div class="clearfix"> </div>
            </div>
        </div>

		<?php

		 	include "views/modules/mensajes.php";
			
		?>
			
         </div>
      </div>
      
      <!-- //Contact-form -->
	  <!-- footer section -->

	  <?php

		include "views/modules/footer.php";

		?>

<!-- //footer section -->
	
      <script src='views/js/jquery-2.2.3.min.js'></script>
      <!-- //js  working-->
     
	<!-- Banner Responsive slider -->
	<script src="views/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
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
	<!-- // Banner Responsive slider -->

      <!--// banner-->
	  <!-- simpleLightbox -->
	<script src="views/js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
<!-- flexSlider -->
	<script defer src="views/js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>

	<!-- //flexSlider -->
<!-- Calendar -->
				<link rel="stylesheet" href="views/css/jquery-ui.css" />
				<script src="views/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			<!-- odometer-script -->
	<script src="views/js/odometer.js"></script>
	<script>
		window.odometerOptions = {
			format: '(ddd).dd'
		};
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats1').html(25);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats2').html(330);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats3').html(542);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats4').html(222);
		}, 1500);
	</script>
	<!-- //odometer-script -->

      <!-- start-smoth-scrolling -->
      <script  src="views/js/move-top.js"></script>
      <script  src="views/js/easing.js"></script>
      <script >
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         	/*
         		var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear' 
         		};
         	*/
         
         	$().UItoTop({ easingType: 'easeOutQuart' });
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="views/js/bootstrap.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>