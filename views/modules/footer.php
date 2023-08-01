<section class="newsletter text-center py-5">
	<div class="container py-lg-3">

		<div class="subscribe_inner">
			<h4 class="mb-4">Subscribe Us</h4>
			<p class="mb-4">Subscribe to our Newsletter to get latest offers from our Barber. </p>

			<form action="#" method="post" class="subscribe_form">
				<input class="form-control" name="emailS" type="email" placeholder="Ingrese su Email..." required="">
				<button type="submit" class="btn1 btn-primary submit"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
			</form>

			<?php

			$suscriptor = new SuscriptoresControlador();
			$suscriptor -> EnviarSuscriptorControlador();

			?>

			<div class="social mt-5">
				<ul class="d-flex mt-4 justify-content-center">
					<li class="mx-2"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-twitter"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fas fa-rss"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="copyright mt-5">
			<p>© 2018 Hotel zone. All Rights Reserved | Design by	<a href="http://w3layouts.com/">W3layouts</a> </p>
		</div>
	</div>
</section>