<x-frontend.master>
    {{-- Breadcum Section Start --}}
    <!-- ============================================================= -->
    @php
        $title = "Contact Us";
    @endphp
	<x-frontend.layouts.elements.breadcum :title="$title" />
	<!-- ============================================================== -->
	<!-- Start - Contact Us - Section -->
	<!-- ============================================================= -->
	<div class="contact-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h6>Contact Us</h6>
						<h1>Get Quote For <span>Contact Us</span> Service</h1>
						<p>Continually optimize cross functional applications via client-centric paradigms.
						Intrinsicly incubate 2.0 internal or "organic" sources whereas.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="contact-form_2">
									<form action="post">
										<input class="contact-style_2" type="text" name="name" placeholder="Frist Name*" required>
									</form>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="contact-form_2">
									<form action="post">
										<input class="contact-style_2" type="text" name="name" placeholder="Your Email*" required>
									</form>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="contact-form_2">
									<form action="post">
										<input class="contact-style_2" type="text" name="name" placeholder="Phone Number*" required>
									</form>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="contact-form_2">
									<form action="post">
										<input class="contact-style_2" type="text" name="name" placeholder="Subject*" required>
									</form>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="contact-form-msg-2 style3">
									<form action="post">
										<textarea name="text" class="contact-style-msg2" name="message" id="text" placeholder="Enter Message" cols="30" rows="10"></textarea>
									</form>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="contact-button style3 text-right">
									<input class="blog-button" type="submit" value="Sent Message"></i>
								</div>
							</div>
						</div>
					</form>
					<div id="status"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
</x-frontend.master>