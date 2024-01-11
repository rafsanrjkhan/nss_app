<x-frontend.master>
    {{-- Breadcum Section Start --}}
    <!-- ============================================================= -->
    @php
        $title = "About Us";
    @endphp
	<x-frontend.layouts.elements.breadcum :title="$title" />
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