<?php 

require get_template_directory() . "/include/setup.php";
require get_template_directory() . "/include/customizer.php";

add_action('wp_enqueue_scripts','personal_theme_scripts');
add_action('after_setup_theme','personal_theme_setup');
add_action('customize_register','personal_theme_customizer');
