<?php 


function personal_empresas_customizer( $wp_customize ){

	//SETTING
	$wp_customize->add_setting('empresa_one', array('default'=> ''));
	
	$wp_customize->add_setting('empresa_two', array('default'=> ''));
	
	$wp_customize->add_setting('empresa_three', array('default'=> ''));
	
	$wp_customize->add_setting('empresa_four', array('default'=> ''));
	
	$wp_customize->add_setting('empresa_five', array('default'=> ''));

	//PAINEL
	$wp_customize->add_panel('empresas', array(
		'title' => 'empresas',
		'priority' => 10
	));

	//SECTION
	$wp_customize->add_section('empresa_1', array(
		'title' => 'Empresa 1',
		'priority' => 1,
		'panel' => 'empresas'
	));

	$wp_customize->add_section('empresa_2', array(
		'title' => 'Empresa 2',
		'priority' => 2,
		'panel' => 'empresas'
	));
	
	$wp_customize->add_section('empresa_3', array(
		'title' => 'Empresa 3',
		'priority' => 3,
		'panel' => 'empresas'
	));
	
	$wp_customize->add_section('empresa_4', array(
		'title' => 'Empresa 4',
		'priority' => 4,
		'panel' => 'empresas'
	));

	$wp_customize->add_section('empresa_5', array(
		'title' => 'Empresa 5',
		'priority' => 5,
		'panel' => 'empresas'
	));

	//CONTROLLER
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'empresa_one',
			array(
				'label' => 'Imagem da Empresa:',
				'section' => 'empresa_1',
				'settins' => 'empresa_one',
				'width' => 600,
				'height' => 400
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'empresa_two',
			array(
				'label' => 'Imagem da Empresa:',
				'section' => 'empresa_2',
				'settins' => 'empresa_two',
				'width' => 600,
				'height' => 400
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'empresa_three',
			array(
				'label' => 'Imagem da Empresa:',
				'section' => 'empresa_3',
				'settins' => 'empresa_three',
				'width' => 600,
				'height' => 400
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'empresa_four',
			array(
				'label' => 'Imagem da Empresa:',
				'section' => 'empresa_4',
				'settins' => 'empresa_four',
				'width' => 600,
				'height' => 400
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'empresa_five',
			array(
				'label' => 'Imagem da Empresa:',
				'section' => 'empresa_5',
				'settins' => 'empresa_five',
				'width' => 600,
				'height' => 400
			)
		)
	);

}