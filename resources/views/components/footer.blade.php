<!-- footer start-->
	<footer id="footer" class="footer-main-block">
		<div class="container">
			<div class="row text-white1">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="courier-type-widget footer-widget mrg-btm-30">
						<h6 class="footer f-h4">About Cazaldo</h6>
						<div class="footer-list">
							<ul>
								<li><a href="{{ url('who-we-are/')}}" title="Who we are?"> Who we Are?</a></li>
								<li><a href="{{ url('how-we-work/')}}" title="HOW WE WORK"> How We Work?</a></li>
								<li><a href="{{ url('why-cazaldo/')}}" title="WHY CZ">Why Kiara Bright?</a></li>
								<li><a href="{{ url('faq/')}}" title="FAQ">FAQ</a></li>
								<li><a href="{{ url('contact/')}}" title="link"> Register with CZ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="courier-type-widget footer-widget mrg-btm-30">
						<h6 class="footer f-h4">Quick Links</h6>
						<div class="footer-list">
							<ul>
								<li><a href="#" title="link">Terms & Conditions</a></li>
								<li><a href="#" title="link">Privacy Policy</a></li>
								<li><a href="#" title="link">Return Refund</a></li>
								<li><a href="{{ url('contact/')}}" title="link">Enquire Now</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="news-widget footer-widget mrg-btm-30">
						<h6 class="footer f-h4">Connect</h6>
						<ul class="address-ul fa-ul">
							<li>
								<span class="fa-li"><i class="las la-home"></i></span>
								<span class="footer-address-dtl">Cazaldo Software<br> Krishna Colony, Sector 73,<br>
Noida, 201301</span>
							</li>
							<li>
								<span class="fa-li"><i class="las la-envelope"></i></span>
								<span class="footer-address-dtl"><a href="mailto:info@cazaldo.com">info@cazaldo.com</a></span>
							</li>
							<li>
								<span class="fa-li"><i class="las la-phone"></i></span>
								<span class="footer-address-dtl"><a href="tel:+9190155 48748">+91 90155 48748</a></span>
							</li>
						</ul>
							
						<div class="row">
							<div class="col-lg-12">
								<div class="footer-social">
									<ul>
										<li>Follow Us :</li>
																				<li><a href="#" target="_blank" title="facebook"><i class="lab la-facebook-f"></i></a></li>
																														<li><a href="#" target="_blank" title="twitter"><i class="lab la-twitter"></i></a></li>
																														<li><a href="#" target="_blank" title="Instagram"><i class="lab la-instagram"></i></a></li>
																			</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tiny-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12" align="center">
						<div class="copyright-block">
							<p>&copy; 2020 <a href="http://cazaldo.com/" title="exelsure courier service">Cazaldo Software</a>. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer end-->
	
	<!-- otp Popup -->
	<div id="otp-popup" class="modal" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-xs">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header cus_header" style="background:#003974;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title cus_title otp-popup-title" style="color:#fff;">Verify OTP</h4>
				</div>
				<div class="modal-body otp-popup-body">
					<p>Please enter the OTP sent to your mobile no. - <a href="javascript:void(0)" id="sent_to_mobile"></a></p>
					<div class="edu2_serc_des form-group">
						<input type="text" class="form-control" placeholder="Enter OTP:" name="otp" id="aotp" required>
						<div class="help-block with-errors"></div>
					</div>
					<div class="otp_msg"></div>
					<button class="btn btn-success" id="submit_otp">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;<button id="resend_otp" class="btn btn-danger">Resend</button><br><br>
				</div>
			</div>
		</div>
	</div>
	<!-- otp Popup -->

	
	
	<!-- Scroll Top Area -->
	<a href="#top" class="go-top" style="display: block;"><i class="las la-angle-up"></i></a>

	<!-- Jquery Library -->
	<script src="{{ asset('assets/js/jquery-2.min.js') }} "></script>
	<!-- Bootstrap Js -->
	<script src="{{ asset('assets/js/bootstrap.bundle.js') }} "></script>
	<!-- Owl Carousel js -->
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- Smooth Scroll Js -->
	<script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>
	<!-- Navigation JS -->
	<script src="{{ asset('assets/js/menumaker.js') }} "></script>
	<!-- Way Points JS -->
	<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
	<!-- Counter Up JS -->
	<script src="{{ asset('assets/js/jquery.counterup.js') }}"></script>
	<!-- Sticky JS -->
	<script src=" {{ asset('assets/js/jquery.sticky.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
	<!-- Mail Chimp JS -->
	<!--<script src="vendor/mailchimp/jquery.ajaxchimp.html"></script>-->
	<!-- Main JS -->
	<script src="{{ asset('assets/js/theme.js') }} "></script>
	<!-- end JS -->
	
	
	
	<script src="assets/new/js/vendor/jquery-1.12.0.min.js"></script>	
		<!-- bootstrap js -->
		<script src="assets/new/js/bootstrap.min.js"></script>
		<!-- nivo slider -->
		<script src="assets/new/js/jquery.nivo.slider.pack.js"></script>
		<!-- owl carousel js --> 
       <!-- <script src="https://kiarabright.in/assets/new/js/owl.carousel.min.js"></script>-->
        <!-- mixitup js -->
        <!--<script src="https://kiarabright.in/assets/new/js/jquery.mixitup.js"></script>-->
		<!-- wow js -->
		<!--<script src="https://kiarabright.in/assets/new/js/wow.min.js"></script>-->
		<!-- jquery.counterup js -->
       <!-- <script src="https://kiarabright.in/assets/new/js/jquery.counterup.min.js"></script>
		<script src="https://kiarabright.in/assets/new/js/waypoints-min.js"></script>-->
		<!-- jquery.countdown js -->
		<!--<script src="https://kiarabright.in/assets/new/js/jquery.countdown.min.js"></script>-->
		<!-- elevateZoom js -->
    	<!--<script src="https://kiarabright.in/assets/new/js/jquery.elevateZoom-3.0.8.min.js"></script> -->  
        <!-- Magnific Popup core JS file -->
		<script src="assets/new/js/jquery.fancybox.pack.js"></script>
		<!-- meanmenu js -->
        <script src="assets/new/js/jquery.meanmenu.js"></script>
        <!-- meanmenu js -->
        <!--<script src="https://kiarabright.in/assets/new/js/ajax-mail.js"></script>-->
		<!-- scrollUp js -->
        <!--<script src="https://kiarabright.in/assets/new/js/jquery.scrollUp.js"></script>-->
		<!-- jquery-ui js -->
        <!--<script src="https://kiarabright.in/assets/new/js/jquery-ui.min.js"></script>-->
		<!-- plugins js -->
		<!--<script src="https://kiarabright.in/assets/new/js/plugins.js"></script>-->
		<!-- main js -->
		<script src="assets/new/js/main.js"></script>	

	<script src="assets/js/jstree.min.js"></script>		
		
		<!-- <script src="../www.google.com/recaptcha/api.js" async defer></script>
		<script type="text/javascript">
			var onloadCallback = function() {
			grecaptcha.render('html_element', {
			'sitekey' : '6LfOMMEZAAAAAFFwpwOdqmdPgIXK7cmLTDMluO5t'
			});
		};
		</script>		
		<script src="../www.google.com/recaptcha/api85f1.js?onload=onloadCallback&amp;render=explicit" async defer> -->
	
	<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
	</script>
	<!--<script type="text/javascript">-->

 <!--       $(document).ready(function() {-->

 <!--           $(".btn-submit").click(function(e){-->

 <!--               e.preventDefault();-->


 <!--               var _token = $("input[name='_token']").val();-->
                
 <!--               var name = $("#name").val();-->

 <!--               var email = $("#email").val();-->

 <!--               var phone = $("#phone").val();-->

 <!--               var msg = $("#message").val();-->


 <!--               $.ajax({-->

 <!--                   url: "{{ route('ajax.request.process') }}",-->

 <!--                   type:'POST',-->

 <!--                   data: {_token:_token,name:name, email:email, phone:phone,msg:msg},-->

 <!--                   success: function(data) {-->

 <!--                     printMsg(data);-->
                    
                    // alert(data);
                     
                      
                    //   if($.isEmptyObject(msg.error)){
                    //       alert(data.success);
                          
                    //   }else{
                          
                    //       alert(data.error);
                    //   }
                      

 <!--                   }-->

 <!--               });-->

 <!--           }); -->


 <!--           function printMsg (msg) {-->

 <!--             if($.isEmptyObject(msg.error)){-->

 <!--                 console.log(msg.success);-->

 <!--                 $('.alert-block').css('display','block').append('<strong>'+msg.success+'</strong>');-->

 <!--             }else{-->

 <!--               $.each( msg.error, function( key, value ) {-->

 <!--                 $('.'+key+'_err').text(value);-->

 <!--               });-->

 <!--             }-->

 <!--           }-->

 <!--       });-->

 <!--   </script>-->

	<script>
  
   $(document).ready(function() {
    $("#enqSubmit").click(function(e) {

      $("#enqform").submit(function(e) {

       
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        
        $.ajax({
          url: formURL,
          type: "POST",
          data: postData,
          success: function(data, textStatus, jqXHR) {
              
              $('.text-danger').text(' ');
              
            if ($.isEmptyObject(data.error)) {
              $("#enqError").html('<p><span class="prettyprintS" style="color:#00ff00;">'+data.success+'</span></p>');
			 
		
            } else {
                console.log(data.error);
                
                
                $.each( data.error, function( key, value ) {
               
                //  $('#enqError').text(data.error);
              $('.'+key+'_err').text(value);
            });
          }
          },error: function(jqXHR, textStatus, errorThrown) {
            $("#pass_res").html('<pre><code class="prettyprint" style="color:#ff0000;">AJAX Request Failed<br/> textStatus=' + textStatus + ', errorThrown=' + errorThrown + '</code></pre>');
          }
        });
        // e.preventDefault(); //STOP default action
        // e.unbind();
      });

    });
  });

</script>
	
	
		
		<script>
		
/* JS is for category treeview */

function categorytreeview(){		

		if($('.box-category').hasClass('treeview')==true){		

			$(".box-category").treeview({

				animated: "slow",

				collapsed: true,

				unique: true		

			});

			$('.box-category li').parent().removeClass('expandable');

			$('.box-category li').parent().addClass('collapsable');

			$('box-category .box-category .collapsable li').css('display','block');		

		}	

}

$(document).ready(function(){categorytreeview();});
</script>

<script>
	// Active menu
$(function(){
		$('#cssmenu ul a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
		$('#cssmenu ul a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')	
		})
	})
</script>
<script>
	$('#home-slider').owlCarousel({
    loop:true,
    margin:10,
	autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      margin: 10,
      responsiveClass: true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
	</script>
		

