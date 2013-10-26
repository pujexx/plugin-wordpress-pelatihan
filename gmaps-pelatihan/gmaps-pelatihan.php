<?php
/**
 * Plugin Name: Google Maps Pelatihan
 * Plugin URI: http://about.me/pujexx
 * Description: Plugin ini untuk pelatihan ksweb.
 * Version: 1.1
 * Author: puji rahmadiyanto
 */

function set_css_js(){
	//wp_enqueue_style( 'gmaps-styles', plugins_url( 'styles.css', __FILE__ ) );
	
	wp_enqueue_style( 'style-gmap', plugins_url( 'css/style.css', __FILE__ ));
	wp_enqueue_script('gmaps-library' , 'http://maps.google.com/maps/api/js?sensor=false&amp;language=en' , array('jquery') , false);
	wp_enqueue_script( 'gmaps-js', plugins_url( 'js/gmap3.js', __FILE__ ),array() , false );
	wp_enqueue_script( 'js-custom', plugins_url( 'js/js.js', __FILE__ ),array() , false );

	
}

function show_map(){	
	echo '<div id="my_map" style="width:700px; height:600px;"></div>';
}

add_action('wp_enqueue_scripts' , 'set_css_js');
add_shortcode('jajal' , 'show_map');