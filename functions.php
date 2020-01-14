<?php

define("THEME_DIR", get_template_directory_uri());
define("STYLE_DIR", get_stylesheet_directory_uri());

remove_action('wp_head', 'wp_generator');


function true_style_frontend() {
   wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css' );
 	wp_enqueue_style( 'fonts_indif', 'https//fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower' );
 	wp_enqueue_style( 'fonts_style', STYLE_DIR . '/fonts/icomoon/style.css' );
 	wp_enqueue_style( 'bootstrap_style', STYLE_DIR . '/css/bootstrap.min.css' );
 	wp_enqueue_style( 'bootstrap_datepicker_style', STYLE_DIR . '/css/bootstrap-datepicker.css' );
 	wp_enqueue_style( 'jquery_fancybox_style', STYLE_DIR . '/css/jquery.fancybox.min.css' );
 	wp_enqueue_style( 'owlcarousel_style', STYLE_DIR . '/css/owl.carousel.min.css' );
 	wp_enqueue_style( 'owltheme_style', STYLE_DIR . '/css/owl.theme.default.min.css' );
 	wp_enqueue_style( 'fonts_flaticon', STYLE_DIR . '/fonts/flaticon/font/flaticon.css' );
 	wp_enqueue_style( 'aos_style', STYLE_DIR . '/css/aos.css' );
 	wp_enqueue_style( 'style_style', STYLE_DIR . '/css/style.css' );
}
 
add_action( 'wp_enqueue_scripts', 'true_style_frontend' );

function true_include_myscript() {
 	wp_enqueue_script( 'jquery', STYLE_DIR . '/js/jquery-3.3.1.min.js', '', true );
 	wp_enqueue_script( 'jquery-migrate', STYLE_DIR . '/js/jquery-migrate-3.0.0.js', true );
 	wp_enqueue_script( 'popper', STYLE_DIR . '/js/popper.min.js', true );
 	wp_enqueue_script( 'bootstrap', STYLE_DIR . '/js/bootstrap.min.js', true );
 	wp_enqueue_script( 'owlcarousel', STYLE_DIR . '/js/owl.carousel.min.js', true );
 	wp_enqueue_script( 'jquerysticky', STYLE_DIR . '/js/jquery.sticky.js', true );
 	wp_enqueue_script( 'jwaypoints', STYLE_DIR . '/js/jquery.waypoints.min.js', true );
 	wp_enqueue_script( 'janimateNumber', STYLE_DIR . '/js/jquery.animateNumber.min.js', true );
 	wp_enqueue_script( 'jfancybox', STYLE_DIR . '/js/jquery.fancybox.min.js', true );
 	wp_enqueue_script( 'jstellar', STYLE_DIR . '/js/jquery.stellar.min.js', true );
 	wp_enqueue_script( 'jeasing', STYLE_DIR . '/js/jquery.easing.1.3.js', true );
 	wp_enqueue_script( 'bootstrap-datepicker', STYLE_DIR . '/js/bootstrap-datepicker.min.js', true );
 	wp_enqueue_script( 'aos', STYLE_DIR . '/js/aos.js', true );
 	wp_enqueue_script( 'main', STYLE_DIR . '/js/main.js', true );
}
 
add_action( 'wp_enqueue_scripts', 'true_include_myscript' );

function footer_enqueue_scripts(){
  remove_action('wp_head','wp_print_scripts');
  remove_action('wp_head','wp_print_head_scripts',9);
  remove_action('wp_head','wp_enqueue_scripts',1);
  add_action('wp_footer','wp_print_scripts',5);
  add_action('wp_footer','wp_enqueue_scripts',5);
  add_action('wp_footer','wp_print_head_scripts',5);
}
add_action('after_setup_theme','footer_enqueue_scripts');

function wpb_custom_logo() {
   echo '
   <style type="text/css">
      #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
         background-image: url(' . STYLE_DIR . '/images/logo.png) !important;
         background-position: 0 0;
         background-size: 20px;
		 background-repeat: no-repeat;
         color:rgba(0, 0, 0, 0);
      }

      #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
         background-position: 0 0;
      }
   </style>
';
}
//Хук для вывода заголовка в административной панели
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

register_nav_menus(
	array(
		'head_menu' => 'Шапка сайта',
	)
);