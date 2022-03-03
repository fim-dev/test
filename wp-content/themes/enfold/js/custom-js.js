jQuery(document).ready(function($) {

	console.log('Document Ready');

	// ---------- Home Testimonials Slider (Slick)

	$('.slider-style-1').slick({
    prevArrow: false,
    nextArrow: false,		
	  autoplay: true,
	  autoplaySpeed: 5000,
	  centerPadding: '60px',
	});

});