<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

// Disable Gutenberg Editor
add_filter( 'use_widgets_block_editor', '__return_false' );

// ____________________ Enqueue Resources (CSS & JS) ____________________
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	// Slick
	wp_register_style('slick-css', get_template_directory_uri() .'/css/slick.css');
	wp_register_style('slick-theme-css', get_template_directory_uri() .'/css/slick-theme.css');
	wp_enqueue_script('slick-min-js', get_template_directory_uri().'/js/slick.min.js', array('jquery'));		

	// Fontawesome
	wp_register_style('all-min-css', get_template_directory_uri() .'/icons/fontawesome-free-5.15.4-web/css/all.css');
	
	// Custom CSS & JS
	wp_register_style('custom-css', get_template_directory_uri() .'/css/custom-css.css', array(), '1.0.47');
	wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom-js.js', array(), '1.0.0');

	// Enqueue all
	wp_enqueue_style( 'dashicons' ); // Dashicons
	wp_enqueue_style('slick-css');
	wp_enqueue_style('slick-theme-css');
	wp_enqueue_script('slick-min-js');	
	wp_enqueue_style('all-min-css');
	wp_enqueue_style('custom-css');
	wp_enqueue_script('custom-js');	
}

// ____________________ Shortcodes ____________________

add_action( 'init', 'register_shortcodes' );
function register_shortcodes() {
	add_shortcode( 'sc_quotes', 'shortcode_quotes' );
}

/**
 * Home Slider Shortcode Callback
 */
function shortcode_quotes ( $atts ) {

	$output = '<div class="slider-style-1">';
	$output .= 	'<div>';
	$output .= 		'<p class="content-quote">Foressa offers backyard trail access. Heed the call of the wild and grab your hiking boots and escape to the majestic mountains anytime.</p>';
	$output .= 	'</div>';
	$output .= 	'<div>';
	$output .= 		"<p class='content-quote'>Breathtaking views, unbounded space, and natural features are just the some of the pleasures.</p>";
	$output .= 	'</div>';
	$output .= '</div>';

	return $output;

	?>

	<!-- <div class="slider-style-1">
	  <div>
	  	<p>“Transforming everyday bags and accessories into timeless pieces”.</p>
	  </div>
	  <div>
	  	<p>“If you don't know their names now, you will soon”.</p>
	  </div>
	  <div>
	  	<p>“Designer backpacks that are worth the splurge”.</p>
	  </div>  
	</div> -->

	<?php



}