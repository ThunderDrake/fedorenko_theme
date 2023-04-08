<?php

// Регистрируем
add_action( 'init', function () {
	register_post_type( 'weddings', [
		'labels'           => [
			'name'               => 'Свадьбы',
			'singular_name'      => 'Свадьбы',
			'name_admin_bar'     => 'Свадьбы',
			'menu_name'          => 'Свадьбы',
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новую свадьбу',
			'edit_item'          => 'Редактировать свадьбу',
			'new_item'           => 'Новая свадьба',
			'view_item'          => 'Посмотреть свадьбу',
			'search_items'       => 'Найти свадьбу',
			'not_found'          => 'Свадьба не найдено',
			'not_found_in_trash' => 'В корзине свадеб не найдено',
			'title_placeholder'  => 'Введите название пакета',
		],
		'public'           => true,
		'rewrite'          => true,
		'capability_type'  => 'post',
		'has_archive'      => 'weddings',
		'hierarchical'     => false,
		'menu_position'    => 8,
		'menu_icon'        => 'dashicons-megaphone',
		'supports'         => [ 'title', 'thumbnail', 'editor' ],
		'posts_per_page'   => - 1,
		'show_in_rest'     => true,
		'show_ui'          => true,
		'show_in_menu'     => true,
		'template_archive' => '/templates/weddings-page/weddings-page.php',
	] );

}, 9 );
