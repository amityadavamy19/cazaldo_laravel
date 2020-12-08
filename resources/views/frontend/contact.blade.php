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
									<span class="footer-address-dtl">Cazaldo Software, Krishna Colony, Sector 73,
Noida, 201301</span>
								</li>
								<li>
									<span class="fa-li"><i class="las la-envelope"></i></span>
									<span class="footer-address-dtl"><a href="mailto:info@cazaldo.in">info@cazaldo.in</a></span>
								</li>
								<li>
									<span class="fa-li"><i class="las la-phone"></i></span>
									<span class="footer-address-dtl"><a href="tel:+91 9015548748">+91 9015548748</a></span>
								</li>
							</ul>
						</div>
					</div>
					
					
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="question-section">
					<h2>Enquiry Form</h2>
					  <div class="alert alert-success alert-block" style="display: none;">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                      <strong class="success-msg"></strong>

                </div>

					 {!! Form::open(['url' => 'contact/submitReq','files'=>'true','id'=>"enqform"]) !!}
					  
						<input type="text" name="name" id="name" pattern="([^\s][A-zÀ-ž\s]+)"  placeholder="Full Name*">
						 <span class="text-danger error-text name_err"></span>
						<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="E-mail*">
						 <span class="text-danger error-text email_err"></span>
						<input type="text" name="phone" id="phone" pattern="^[6-9]\d{9}$" maxlength="10" placeholder="Phone*">
						 <span class="text-danger error-text phone_err"></span>
						<textarea name="message" id="message" cols="30" rows="10" placeholder="How can we help you?*"></textarea>
						<span class="text-danger error-text message_err"></span>
					
						<button class="btn btn-primary btn-submit" type="submit" name="submit" id="enqSubmit">Submit</button>
						<span id="enqError"></span>
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

    
