<?php

// Регистрируем
add_action( 'init', function () {
	register_post_type( 'events', [
		'labels'           => [
			'name'               => 'Мероприятия',
			'singular_name'      => 'Мероприятия',
			'name_admin_bar'     => 'Мероприятия',
			'menu_name'          => 'Мероприятия',
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новую мероприятие',
			'edit_item'          => 'Редактировать мероприятие',
			'new_item'           => 'Новое мероприятие',
			'view_item'          => 'Посмотреть мероприятие',
			'search_items'       => 'Найти мероприятие',
			'not_found'          => 'Мероприятие не найдено',
			'not_found_in_trash' => 'В корзине мероприятий не найдено',
			'title_placeholder'  => 'Введите название пакета',
		],
		'public'           => true,
		'rewrite'          => true,
		'capability_type'  => 'post',
		'has_archive'      => 'events',
		'hierarchical'     => false,
		'menu_position'    => 9,
		'menu_icon'        => 'dashicons-megaphone',
		'supports'         => [ 'title', 'thumbnail', 'editor' ],
		'posts_per_page'   => -1,
		'show_in_rest'     => true,
		'show_ui'          => true,
		'show_in_menu'     => true,
		'template_archive' => '/templates/events-page/events-page.php',
	] );

}, 9 );
