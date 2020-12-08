<!-- top-nav bar start-->
<div id="nav-bar" class="nav-bar-main-block">
		<div class="sticky-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-12">
						<!--logo-->
						<div class="logo">
							<a href="{{ url('/') }}" title="logo"><img src="{{ asset('assets/images/caz_logo.png') }}" alt="logo"></a>
						</div>
						<!-- Responsive Menu Area -->
						<div class="responsive-menu-wrap"></div>
					</div>

					<div class="col-lg-8">
						<!-- main-menu-->
						<div class="navigation text-white">
							<div id="cssmenu">
								<ul>
									<li class="active"><a href="{{  url('/') }}" title="Home">Home</a></li>
									<li><a href="{{ url('who-we-are/')}}" title="Who we are?">Who we are?</a></li>
									<li><a href="{{ url('why-cazaldo/')}}" title="WHY CZ">Why Cazaldo?</a></li>
									<li><a href="{{ url('services/')}}" title="PRODUCT CATALOG">Services</a></li>
									<li><a href="{{ url('how-we-work/')}}" title="HOW WE WORK">How we work?</a></li>
									<li><a href="{{ url('faq/')}}" title="FAQ">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2">
						<div class="navigation-btn">
							<a href="{{ url('contact/')}}" class="btn btn-primary" title="get quotes">Start Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- top-nav bar end--> 