<?php
function mychildtheme_enqueue_styles() {
	wp_enqueue_style('style_font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800|Titillium+Web:300,400,400i,600,700"');
	wp_enqueue_style('style_icons', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"');
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style('master_css', '/wp-content/themes/dimensional-dental/styles/master.css');
}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );


function theme_js() {
	global $wp_scripts;
	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
	wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);
	$wp_scripts->add_data('html5_shiv', 'conditonal', 'lt IE 9');
	$wp_scripts->add_data('respond-js', 'conditonal', 'lt IE 9');
	wp_enqueue_script('master_js', '/wp-content/themes/dimensional-dental/scripts/master.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'theme_js');

?>
