<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>National Software Solutions Ltd (NSS)</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Favicon -->
	<link rel="icon" sizes="56x56" href="{{ asset('ui/frontend/assets')}}/images/fav-icon/nss-fav-icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('ui/frontend/assets')}}/css/bootstrap.min.css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{ asset('ui/frontend/assets')}}/css/owl.carousel.min.css" media="all" />
	<!-- Animate Css -->
	<link rel="stylesheet" href="{{ asset('ui/frontend/assets')}}/css/animate.css" media="all" />		
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{ asset('ui/frontend/assets')}}/css/all.min.css" media="all" />	
	<link rel="stylesheet" href="{{ asset('ui/frontend/assets')}}/css/flaticon.css" media="all" />	
	<link rel="stylesheet" href="{{ asset('ui/frontend/assets')}}/css/meanmenu.min.css" media="all" />	
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{ asset('ui/frontend/assets')}}/css/template-default.css" media="all" />		
	<link rel="stylesheet" href="{{ asset('ui/frontend/assets')}}/css/owl.theme.default.min.css" type="text/css" media="all" />	
	<!-- Main Style CSS -->
	<link rel="stylesheet"  href="{{ asset('ui/frontend')}}/style.css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{ asset('ui/frontend/assets')}}/css/owl.transitions.css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{ asset('ui/frontend/venobox')}}/venobox.css" media="all" />
	<!-- modernizr js -->	
	<script src="{{ asset('ui/frontend/assets')}}/js/vendor/modernizr-3.5.0.min.js"></script>
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('ui/frontend/assets')}}/css/responsive.css" media="all" />	
	
</head>
<body>

	<div id="preloader">
		<div id="loader"></div>
	</div>
	<!-- ============================================================== -->
	<!-- Start - Header-Menu- Area -->
	<!-- ============================================================= -->		
	<div id="sticky-header" class="header-menu-section">
		<div class="container">
			<div class="row header-border">
				<div class="col-lg-3 col-md-12">
					<div class="header-logo">
						{{-- <a class="menu-logo" href="index.html"><img src="{{ asset('ui/frontend/assets')}}/images/fav-icon/delton.png" alt=""></a>  --}}
						<a class="menu-logo" href="#"><img src="{{ asset('ui/frontend/assets')}}/images/nss-logo/white/nss-logo-2448-x-1500.png" height="50px" alt=""></a> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Start - Mobile-Menu- Section -->
	<!-- ============================================================= -->
	<!-- mobile menu seection -->
    <div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
			<nav class="itsoft_menu">
			</nav>
		</div>
	</div>
	<!-- ============================================================== -->
	
	

	<!-- start - Slider - Section -->
	<!-- ============================================================= -->
    <div class="slider-section d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="slider-content">
						<h1 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">Under <span>Maintenence</span></h1>
						<h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">Launching Soon!!</h2>
						<p  class="slider-desc">National Software Solutions Ltd (NSS) has amassed a varied clientele in the fields of industry, education, healthcare, and finance.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-shape1 alltuchtopdown">
			<img src="{{ asset('ui/frontend/assets')}}/images/slider-shape1.png" alt="">
		</div>
		<div class="slider-shape2 bounce-animate">
			<img src="{{ asset('ui/frontend/assets')}}/images/launching.png" width="600" alt="">
		</div>
		<div class="slider-shape3 bounce-animate">
		</div>
		<div class="slider-shape4 rotateme">
			<img src="{{ asset('ui/frontend/assets')}}/images/slider-shape4.png" alt="">
		</div>
		<div class="slider-shape5 rotateme">
			<img src="{{ asset('ui/frontend/assets')}}/images/slider-shape5.png" alt="">
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Start - Domain - Section -->
	<!-- ============================================================= -->
    <x-frontend.layouts.elements.domain-section/>
	<!-- ============================================================== -->
	<!-- Start - Feature - Section -->
	<!-- ============================================================= -->
    <x-frontend.layouts.elements.feature-section/>
	<!-- ============================================================== -->
	<!-- Start - Call Do- Section -->
	<!-- ============================================================= -->
    <x-frontend.layouts.elements.call-do-section/>
	<!-- ============================================================== -->
	<!-- Start -  Service- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.service-section />
	<!-- ============================================================== -->
	<!-- Start - Pricing Plan- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.pricing-section />
	<!-- ============================================================== -->
	<!-- Start - Security- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.security-section />
	<!-- ============================================================== -->
	<!-- Start - Advertise- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.advertise-section />
	<!-- ============================================================== -->
	<!-- Start - Data Center - Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.data-center-section />
	<!-- ============================================================== -->
	<!-- Start - Testimonial- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.testimonial-section />
	<!-- ============================================================== -->
	<!-- Start - Blog- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.blog-section />
	<!-- ============================================================== -->
	<!-- Start Search Popup Area -->
	<!--==================================================-->
	<x-frontend.layouts.elements.search-popup />
	<!--==================================================-->
	<!-- End Search Popup Area -->
	<!--==================================================-->



























	<!-- Start - Brand- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.brand-section />
	<!-- ============================================================== -->
	<!-- Start - Footer- Section -->
	<!-- ============================================================= -->
	<div class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-6">
					<div class="footer-logo">
						<img src="{{ asset('ui/frontend/assets')}}/images/nss-logo/white/nss-logo-2448-x-1500.png" width="200" alt="">
					</div>
					<div class="footer-text">
						<p>National Software Solutions Ltd (NSS) has amassed a varied clientele in the fields of industry, education, healthcare, and finance. Our clients, who range in size from small and medium-sized businesses to multinational organizations, profit from our customized, scalable, and advanced technological solutions. Monotonectally.</p>
					</div>
					<div class="footer-address">
						<div class="footer-social-icon">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a class="style2" href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a class="style3" href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-title">
						<h2><span>C</span>ontact</h2>
					</div>
					<div class="footer-contact">
						<ul>
							<li><i class="fas fa-phone-volume"></i> (+880) 1684-576-384</li>
							<li><i class="fas fa-envelope-open-text"></i> info@nss.com</li>
							<li><i class="fas fa-map-marker-alt"></i> 
							Dhaka, Bangladesh</li>
						</ul>
					</div>
				</div>
			</div> 
		</div>
	</div>
	<!-- footer-copyright-section -->
	<x-frontend.layouts.partials.footer-bottom-section />
	<!--==================================================-->
	<!--start fTo Top-->
	<!--===================================================-->
	<x-frontend.layouts.partials.scroll-area-section />
	<!-- Sidebar Cart Item -->
	<x-frontend.layouts.elements.sidebar-cart-section />
	<!--==================================================-->

	<!-- jquery js -->	
	<script src="{{ asset('ui/frontend/assets')}}/js/vendor/jquery-3.2.1.min.js"></script>
	<!-- bootstrap js -->	
	<script src="{{ asset('ui/frontend/assets')}}/js/bootstrap.min.js"></script>
	<!-- particles Js -->
	<script src="{{ asset('ui/frontend/assets')}}/js/particles.min.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/jquery.scrollUp.js"></script>
	<!-- carousel js -->
	<script src="{{ asset('ui/frontend/assets')}}/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script src="{{ asset('ui/frontend/assets')}}/js/jquery.counterup.min.js"></script>
	<!-- waypoints js -->
	<script src="{{ asset('ui/frontend/assets')}}/js/waypoints.min.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/jquery.counterup.min.js"></script>
	<!-- imagesloaded js -->
	<script src="{{ asset('ui/frontend/assets')}}/js/imagesloaded.pkgd.min.js"></script>
	<!-- isotope js -->
	<script src="{{ asset('ui/frontend/assets')}}/js/isotope.pkgd.min.js"></script>
	<!-- Wow Js -->
	<script src="{{ asset('ui/frontend/assets')}}/js/wow.min.js"></script>
	<script src="{{ asset('ui/frontend/assets')}}/js/jquery.meanmenu.js"></script>
	<!-- venobox js -->
	<script src="{{ asset('ui/frontend/venobox')}}/venobox.js"></script>
	<!-- venobox min js -->
	<script src="{{ asset('ui/frontend/venobox')}}/venobox.min.js"></script>

	<!-- theme js -->	
	<script src="{{ asset('ui/frontend/assets')}}/js/theme.js"></script>
	
		<script>
		"use strict";
jQuery,
    jQuery(document).ready(function (o) {
        0 < o(".offset-side-bar").length &&
            o(".offset-side-bar").on("click", function (e) {
                e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
            }),
            0 < o(".close").length &&
                o(".close").on("click", function (e) {
                    e.preventDefault(), o(".cart-group").removeClass("isActive");
                }),
            0 < o(".navSidebar-button").length &&
                o(".navSidebar-button").on("click", function (e) {
                    e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
                }),
            0 < o(".close").length &&
                o(".close").on("click", function (e) {
                    e.preventDefault(), o(".info-group").removeClass("isActive");
                }),
            o("body").on("click", function (e) {
                o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive");
            }),
            o(".dt-sidebar-widget").on("click", function (e) {
                e.stopPropagation();
            }),
            0 < o(".xs-modal-popup").length &&
                o(".xs-modal-popup").magnificPopup({
                    type: "inline",
                    fixedContentPos: !1,
                    fixedBgPos: !0,
                    overflowX: "auto",
                    closeBtnInside: !1,
                    callbacks: {
                        beforeOpen: function () {
                            this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
                        },
                    },
                });
    });

</script>

	<!--jquery js-->
	<script>
		 $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });

    $('.go-top').on('click', function () {
        $("html, body").animate({
            scrollTop: "0"
        }, 1200);
    });
	</script>

</body>
</html>


