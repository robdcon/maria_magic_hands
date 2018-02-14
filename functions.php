<?php
	function magic_enqueue() 

	{
		wp_enqueue_script('magic_jquery', get_template_directory_uri().'/js/jquery-1.10.2.min.js',array(), 'false');
		wp_enqueue_script('magic_myjquery', get_template_directory_uri().'/js/myjquery.js',array(), 'false');

		wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js',array(), 'false');

		wp_enqueue_script('load_treatment', get_template_directory_uri().'/js/load_treatments.js',array(), 'false');
		wp_enqueue_script('treatment_class', get_template_directory_uri().'/js/treatment-class.js',array(), 'false');
		wp_enqueue_script('treatment_select', get_template_directory_uri().'/js/magic-ajax.js',array(), 'false');

		wp_enqueue_script('myscript', get_template_directory_uri().'/js/myscript.js',array(), 'false');
		
		wp_enqueue_script('smoothscroll', get_template_directory_uri().'/js/smoothscroll.js',array(), 'false');
		
		wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css', array(), 'false', 'all');

		wp_enqueue_style('mystyle', get_template_directory_uri().'/style.css', array(), 'false', 'all');
	}
	
	add_action('wp_enqueue_scripts','magic_enqueue');

	

	function magic_theme_setup() 

	{
		add_theme_support('menus');
		register_nav_menu('primary', 'Primary Header Navigation');
		register_nav_menu('secondary', 'Footer Navigation');
		register_nav_menu('tertiary', 'Sidebar Navigation');
	}
	add_action('init','magic_theme_setup');
	
