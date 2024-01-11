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
	<x-frontend.layouts.partials.sticky-header />
	<!-- ============================================================== -->
	<!-- Start - Mobile-Menu- Section -->
	<!-- ============================================================= -->
	<!-- mobile menu seection -->
    <x-frontend.layouts.partials.mobile-menu-section />
	<!-- ============================================================== -->
	{{ $slot }}
	<!-- Start - Brand- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.brand-section />
	<!-- ============================================================== -->
	<!-- Start - Footer- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.partials.footer-section />
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