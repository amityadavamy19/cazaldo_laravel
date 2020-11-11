<div class="contact-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8">
						<div class="address-boxes">
							<h4 class="location-title">Corporate Office</h4>
							<ul class="address-ul fa-ul">
								<li>
									<span class="fa-li"><i class="las la-home"></i></span>
									<!--<span class="footer-address-dtl">GB-38, High Street Mall, Kapurbawdi,<br>Thane West-400601</span>-->
									<span class="footer-address-dtl">Kiara Bright Workshala Spaces, D9, Sec 3, Noida, 201301</span>
								</li>
								<li>
									<span class="fa-li"><i class="las la-envelope"></i></span>
									<span class="footer-address-dtl"><a href="mailto:info@kairabright.in">info@kairabright.in</a></span>
								</li>
								<li>
									<span class="fa-li"><i class="las la-phone"></i></span>
									<span class="footer-address-dtl"><a href="tel:+91 9310264956">+91 9310264956</a></span>
								</li>
							</ul>
						</div>
					</div>
					
					
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="question-section">
					<h2>Enquiry Form</h2>
					<form method="post" class="enquiry-form" onSubmit="return submitEnquiry('enquiry-form','error_msg','enqSubmit')">
						<input type="text" name="name" id="name" pattern="([^\s][A-zÀ-ž\s]+)" required="" placeholder="Full Name*">
						<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" placeholder="E-mail*">
						<input type="text" name="phone" id="phone" pattern="^[6-9]\d{9}$" maxlength="10" required="" placeholder="Phone*">
						<textarea name="message" id="message" cols="30" rows="10" required="" placeholder="How can we help you?*"></textarea>
						<div class="g-recaptcha" data-sitekey="6LfOMMEZAAAAAFFwpwOdqmdPgIXK7cmLTDMluO5t" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
						<input type="hidden" name="form_type" value="1">
						<div class="error_msg"></div>
						<button class="btn btn-primary" type="submit" name="submit" id="enqSubmit">Submit</button>
					</form>
				</div>
			</div>
			<!--<div class="col-lg-6">
				<div class="contact-form">
					<h3>Get in Touch</h3>
					<form name="contact-form" id="contactForm" action="http://capricorn-theme.net/html/excelsure/sendemail.php" method="POST">
						<input type="text" name="name" id="name" required="" placeholder="User Name">
						<input type="email" name="email" id="email" required="" placeholder="Your E-mail">
						<input type="text" name="subject" id="subject" placeholder="Subject">
						<textarea name="message" id="message" cols="30" rows="10" required="" placeholder="How can help you?"></textarea>
						<button class="btn btn-primary" type="submit" name="submit">Send Message</button>
					</form>
				</div>
			</div>-->
		</div>
	</div>
</div>  