<?php

// Регистрируем
add_action( 'init', function () {
	register_post_type( 'activity', [
		'labels'           => [
			'name'               => 'Ивенты',
			'singular_name'      => 'Ивенты',
			'name_admin_bar'     => 'Ивенты',
			'menu_name'          => 'Ивенты',
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новый ивент',
			'edit_item'          => 'Редактировать ивент',
			'new_item'           => 'Новый ивент',
			'view_item'          => 'Посмотреть ивент',
			'search_items'       => 'Найти ивент',
			'not_found'          => 'Ивентов не найдено',
			'not_found_in_trash' => 'В корзине ивентов не найдено',
			'title_placeholder'  => 'Введите название пакета',
		],
		'public'           => true,
		'rewrite'          => true,
		'capability_type'  => 'post',
		'has_archive'      => 'activity',
		'hierarchical'     => false,
		'menu_position'    => 8,
		'menu_icon'        => 'dashicons-megaphone',
		'supports'         => [ 'title', 'thumbnail', 'editor' ],
		'posts_per_page'   => -1,
		'show_in_rest'     => true,
		'show_ui'          => true,
		'show_in_menu'     => true,
		'template_archive' => '/templates/activity-page/activity-page.php',
	] );

}, 9 );
