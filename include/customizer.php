<?php 

require get_template_directory() . "./include/empresas.php";

function personal_theme_customizer( $wp_customize ){

	$wp_customize->get_section('title_tagline')->title = 'Nome do Site e Logo';

	$wp_customize->get_section('custom_css')->description = 'Só coloque CSS adicional se você souber fazer css, ou souber de front-end';

	//CRIANDO UM PAINEL
	$wp_customize->add_panel('opcoes', array(
		'title' => 'Opções do Tema',
		'priority' => 1
	));

	personal_empresas_customizer($wp_customize);

}


