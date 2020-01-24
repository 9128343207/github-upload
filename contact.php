<?php
	if (isset($_POST['submit'])) {
		$to = 'sales@osiltec.com';
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];

		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$message = '<table style="width:100%">
			<tr>
				<td>' . $name . '</td>
			</tr>
			<tr><td>Email: ' . $email . '</td></tr>
			<tr><td>phone: ' . $subject . '</td></tr>
			<tr><td>Message: ' . $message . '</td></tr>
		</table>';

		if (mail($to, $email, $message, $headers)) {
			$MSG = 'The message has been sent.';
		} else {
			$MSG = 'failed! try again.';
		}
	}

?>




<?php include 'includes/head.php'; ?>
    
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Contact Us
				</h1>
				<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="contact.html"> Contact Us</a></p>
			</div>
		</div>
	</div>
</section>
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row">
			<iframe src="https://maps.google.com/maps?q=OSILTEC%20consulting&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>

<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 d-flex flex-column address-wrap">
				<div class="single-contact-address d-flex flex-row">
					<div id="logo-contact">
						<a href="index.php">
							<img src="img/LOGO/1.png" alt='osiltec_chemicals'>
						</a>
					</div><br />
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-home"></span>
					</div>
					<div class="contact-details">
						<h5>Osiltec Consulting Pvt. Ltd.</h5>
						<p>Dhruvatara Apartment Somajiguda, No. 6-3-652/D/20
						Near Errum Manzil Metro Station,
						Hyderabad 500082, Telangana State.
						INDIA</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="contact-details">
						<h5>Tel +91 40 4855 5141 Fax +91 40 4852 2828</h5>
						<!-- <p>Mon to Fri 9am to 6 pm</p> -->
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="contact-details">
					</div>
				</div>
			</div>
			<div class="col-lg-8">
			<p style="color:red">
				<?php if (isset($MSG)) {
							echo $MSG;
						} ?>
			</p>
				<form class="form-area " id="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="contact-form text-right">
					<div class="row">
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
							<div class="mt-20 alert-msg" style="text-align: left;"></div>
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea form-control" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							<input type="submit" class="genric-btn primary circle mt-30" style="float: right;" name="submit" value="Submit">Send Message
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End contact-page Area -->

<!-- start footer Area -->
<?php include 'includes/footer.php'; ?>
<!-- End footer Area -->

<style>
	#logo-contact>a>img {
		height: 100px;
		width: 250px;
	}
</style>
</body>

</html>