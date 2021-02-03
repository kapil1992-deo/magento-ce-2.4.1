<?php
function kapil_deo(){
	//stlesheet

	wp_enqueue_style('custom_style',get_stylesheet_uri());
	wp_enqueue_style('bootstrap_custom',get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('templatemo_style',get_template_directory_uri().'/css/templatemo_style.css');
	wp_enqueue_style('templatemo_misc',get_template_directory_uri().'/css/templatemo_misc.css');
	wp_enqueue_style('flexslider_custom',get_template_directory_uri().'/css/flexslider.css');
	wp_enqueue_style('testimonails-slider',get_template_directory_uri().'/css/testimonails-slider.css');

	// javascripts
	
	/*wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js', array ( 'jquery' ), 1.1, true);

	wp_enqueue_script( 'custom_jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.0.min.js', array ( 'jquery' ), 1.1, true);

	wp_enqueue_script( 'jquery_gmap3_min_js', get_template_directory_uri() . '/js/vendor/jquery.gmap3.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'plugins_js', get_template_directory_uri() . 'js/plugins.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);*/
}

add_action("wp_enqueue_scripts","kapil_deo");

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
?>