<x-frontend.master>
    @php
        $title = "Services";
    @endphp
	<x-frontend.layouts.elements.breadcum :title="$title" />
    <!-- Start - Feature - Section -->
	<!-- ============================================================= -->
    <x-frontend.layouts.elements.feature-section/>
	<!-- ============================================================== -->
    <!-- Start -  Service- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.service-section />
	<!-- ============================================================== -->
    <!-- Start - About - Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.about-us-section-two/>
	<!-- ============================================================== -->
    <!-- Start - Call Do- Section -->
	<!-- ============================================================= -->
    <x-frontend.layouts.elements.call-do-section/>
	<!-- ============================================================== -->
    <!-- Start - Security- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.security-section-two/>
	<!-- ============================================================== -->
	<!-- Start - Testimonial- Section -->
	<!-- ============================================================= -->
	<x-frontend.layouts.elements.testimonial-section />
	<!-- ============================================================== -->
</x-frontend.master>
