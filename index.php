<?php
if (isset($_POST['submit'])) {
	$to = 'sales@osiltec.com';
	$name = $_POST["name"];
	$email = $_POST["email"];

	$message = $_POST["message"];
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$message = '<table style="width:100%">
					<tr><td>' . $name . '</td></tr>
					<tr><td>Email: ' . $email . '</td></tr>
					<tr><td>Text: ' . $message . '</td></tr>
				</table>';

	// mail($to,$email,$message,$headers);
	// mail($name,$subject);
	// echo 'Mail sent successfully. Thank You '.$name.' for contacting us';

	if (mail($to, $email, $message, $headers)) {
		echo 'The message has been sent.';
	} else {
		echo 'failed';
	}
}
?>

<?php include 'includes/head.php'; ?>


<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-12 col-md-12">
				<h6 class="text-uppercase">Don’t look further, here is the key</h6>
				<h1>
					We’re Industrial solution
				</h1>
				<a href="#service" class="primary-btn header-btn text-uppercase">Get Started</a>
			</div>
		</div>
	</div>
</section>

<section class="service-area section-gap" id="service">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-30 header-text text-center">
				<h1 class="mb-10">Our Capturing Market Sectors</h1>
				<p>
					Every product is a challenge for us and we as a team sail through making it possible to attract more of such challenges
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="single-service">
					<div class="thumb">
						<a href="product.php"><img src="img/s1.jpg" alt=""> </a>
					</div>
					<h4>Water Treatment Units</h4>
					<p>
						<!-- We also provide the very best oilfield products and services. As a company, we believe in building true partnerships with our customer and treat every project as if it were our own. -->
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-service">
					<div class="thumb">
						<a href="product.php"> <img src="img/s2-1.jpg" alt=""> </a>
					</div>
					<h4>Oil Industry</h4>
					<p>
						<!-- \/\/\/\/\We offer EPC services on our own as well as in association with other established equipment manufacturers and construction. -->
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-service">
					<div class="thumb">
						<a href="product.php"> <img src="img/s2-2.jpg" alt=""> </a>
					</div>
					<h4>Portable water industry</h4>
					<p>
						<!-- We are the new energy high technology enterprise, dedicated to produce solar panel, LED lights. -->
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-service">
					<div class="thumb">
						<a href="product.php"> <img src="img/s2-3.jpg" alt=""> </a>
					</div>
					<h4>Sugar industries</h4>
					<p>
						<!-- We offer EPC services on our own as well as in association with other established equipment manufacturers and construction. -->
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-service">
					<div class="thumb">
						<a href="product.php"><img src="img/s2-4.jpg" alt=""></a>
					</div>
					<h4>Paper and pulp</h4>
					<p>
						<!-- We are focused on delivering value to the customer. -->
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-service">
					<div class="thumb">
						<a href="product.php"> <img src="img/s2-5.jpg" alt=""> </a>
					</div>
					<h4>Bulk Drug Industry</h4>
					<p>
						<!-- We are the new energy high technology enterprise, dedicated to produce solar panel, LED lights. -->
					</p>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- Start faq Area -->
<section class="faq-area section-gap relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-3 col-md-6">
				<div class="single-faq">
					<div class="circle">
						<div class="inner"></div>
					</div>
					<h5><span class="counter">2</span>K+</h5>
					<p>
						Projects Completed
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-faq">
					<div class="circle">
						<div class="inner"></div>
					</div>
					<h5><span class="counter">5.5</span>K</h5>
					<p>
						Total Employees
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-faq">
					<div class="circle">
						<div class="inner"></div>
					</div>
					<h5 class="counter">959</h5>
					<p>
						Happy Clients
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-faq">
					<div class="circle">
						<div class="inner"></div>
					</div>
					<h5 class="counter">367</h5>
					<p>
						Tickets Submited
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End faq Area -->

<!-- Start feedback Area -->
<section class="feedback-area aboutus-feedback section-gap" id="feedback">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-60 header-text text-center">
				<h1 class="mb-10">Enjoy our Client’s Feedback</h1>
				<p>
					Who are in extremely love with eco friendly system..
				</p>
			</div>
		</div>
		<div class="row feedback-contents justify-content-center align-items-center">
			<div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
				<div class="overlay overlay-bg"></div>
				<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="img/play-btn.png" alt=""></a>
			</div>
			<div class="col-lg-6 feedback-right">
				<div class="active-review-carusel">
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Fannie Rowe</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Fannie Rowe</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-feedback-carusel">
						<div class="title d-flex flex-row">
							<h4 class="pb-10">Fannie Rowe</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked	"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End feedback Area -->

<section class="home-about-area section-gap" id="about">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-8 col-md-12 home-about-left">
				<!-- <h6>Brand new app to blow your mind</h6> -->
				<h1>
					We’ve made a life <br>
					that will change you
				</h1>
				<p class="sub">
					<h3>We are here to listen from you deliver exellence</h3>
				</p><br>
				<!-- <p class="pb-20">
							</p> -->
				<a class="primary-btn" href="#">Get Started Now</a>
			</div>
			<div class="col-lg-4 col-md-12 home-about-right relative">
				<form class="form-wrap" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<h4 class="text-white pb-20">Request a Quote</h4>

					<input name="name" type="text" class="form-control" placeholder="Name">
					<!-- <input type="phone" class="form-control" placeholder="Phone Number"> -->
					<input name="email" type="email" class="form-control" placeholder="Email Address">
					<textarea name="message" id="" cols="30" rows="5" placeholder="Message" class="form-control"></textarea>
					<button class="primary-btn" name="submit"> Request Free Quote</button>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Start project Area -->
<section class="project-area section-gap" id="project">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 pb-30 header-text text-center">
				<h1 class="mb-10">Our Products</h1>
				<!-- <p>
								Who are in extremely love with eco friendly system..
							</p> -->
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-4">
				<a href="img/hm6.png" class="img-gal">
					<img class="img-fluid single-project" src="img/chemical/1.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4">
				<a href="img/hm2.png" class="img-gal">
					<img class="img-fluid single-project" src="img/chemical/2.jpeg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4">
				<a href="img/hm3.png" class="img-gal">
					<img class="img-fluid single-project" src="img/chemical/3.jpeg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4">
				<a href="img/hm7.png" class="img-gal">
					<img class="img-fluid single-project" src="img/chemical/aeromatic.png" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4">
				<a href="img/hm4.png" class="img-gal">
					<img class="img-fluid single-project" src="img/chemical/bleach.jpeg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4">
				<a href="img/hm8.png" class="img-gal">
					<img class="img-fluid single-project" src="img/chemical/pulping.jpeg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4">
				<a href="img/hm10.jpg" class="img-gal">
					<img class="img-fluid single-project" src="img/chemical/mineral-filler.jpeg" alt="">
				</a>
			</div>
			<div class="col-lg-3 col-md-4">
				<a href="img/hm11.jpg" class="img-gal">
					<img class="img-fluid single-project" src="img/chemical/wet-strength-additive.jpeg" alt="">
				</a>
			</div>

		</div>
</section>

<?php include 'includes/footer.php'; ?>
<!-- End footer Area -->

</body>

</html>