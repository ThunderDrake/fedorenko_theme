<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Отзывы',
		'menu_title'	=> 'Отзывы',
		'menu_slug' 	=> 'add-review',
		'capability'	=> 'edit_posts',
    'icon_url'    => 'dashicons-awards',
		'redirect'		=> false,
    'position'    => 10
	));

}
