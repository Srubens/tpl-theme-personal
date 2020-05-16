<?php 

function personal_theme_scripts(){

	wp_enqueue_style('font-poppins','https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
	wp_enqueue_style('icon-bootstrap', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
	wp_enqueue_style('ionicons', get_template_directory_uri() . '/css/ionicons.min.css');
	wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
	wp_enqueue_style('icomoon', get_template_directory_uri() . '/css/icomoon.css');
	wp_enqueue_style('style_theme', get_template_directory_uri() . '/css/style.css');


	
	wp_enqueue_script('main-js',  get_template_directory_uri() . '/js/main.js', array("jquery"), false, true);
	wp_enqueue_script('jquery-migrate',  get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', false, true);
	wp_enqueue_script('popper',  get_template_directory_uri() . '/js/popper.min.js', false, true);
	wp_enqueue_script('bootstrap-js',  get_template_directory_uri() . '/js/bootstrap.min.js', false, true);
	wp_enqueue_script('easing-js',  get_template_directory_uri() . '/js/jquery.easing.1.3.js', false, true);
	wp_enqueue_script('waypoints-js',  get_template_directory_uri() . '/js/jquery.waypoints.min.js', false, true);
	wp_enqueue_script('stellar-js',  get_template_directory_uri() . '/js/jquery.stellar.min.js', false, true);
	wp_enqueue_script('owl-carousel-js',  get_template_directory_uri() . '/js/owl.carousel.min.js', false, true);
	wp_enqueue_script('magnific-popup',  get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', false, true);
	wp_enqueue_script('aos-js',  get_template_directory_uri() . '/js/aos.js', false, true);
	wp_enqueue_script('animateNumber',  get_template_directory_uri() . '/js/jquery.animateNumber.min.js', false, true);
	wp_enqueue_script('scrollax',  get_template_directory_uri() . '/js/scrollax.min.js', false, true);
}

function personal_theme_setup(){

	// SUPORTE PARA IMAGENS 
	add_theme_support('post-thumbnails');

	//SUPORTE PARA TITLE DO TEMA
	add_theme_support('title-tag');

	//LOGO CUSTOMIZADA
	add_theme_support('custom-logo');

	//AJUSTANDO OS TIPOS DE POSTS
	add_theme_support('post-formats', array('video', 'audio', 'gallery'));

	//SUPORTE PARA MENUS
	add_theme_support('menus');

	register_nav_menu('primary', ("Menu Primario"));
	register_nav_menu('topo', 'Menu Topo');

	// REMOVENDO A BARRA DO ADMIN
	// show_admin_bar(false);

	add_theme_support("custom-header", array(
		'default-image' => get_template_directory_uri() . '/images/about.jpg',
		'witdh' => 200,
		'heigth' => 200,
		'flex-width' => true,
		'flex-heigth' => true,
		'header-text' => false,
		'uploads' => true
	));

	register_default_headers(array(
		'headerOne' => array(
			'url' => get_template_directory_uri() . '/images/about.jpg',
			'thumbnail_url' => get_template_directory_uri() . '/images/about.jpg',
			'description' => 'headerOne'
		)
	));

	add_theme_support('html5', array(
		'url' => get_template_directory_uri() . '/images/partner-1.png',
		'thumbnail_url' => get_template_directory_uri() . '/images/partner-1.png',
		'description' => 'imageOne'
	));

}

