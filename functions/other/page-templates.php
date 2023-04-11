<?php
/**
 * Добавляем шаблоны, которые лежат глубже, чем может прочесть движок.
 */


/**
 * @param string[] $templates
 *
 * @return string[]
 */
function add_templates_to_dropdown( $templates ) {

	// выбор шаблона в атрибутах
	$templates['templates/about-page/about-page.php'] = 'Шаблон страницы О нас';
	$templates['templates/contacts-page/contacts-page.php'] = 'Шаблон страницы Контакты';
	$templates['templates/conditions-page/conditions-page.php'] = 'Шаблон страницы Условия работы';
	$templates['templates/events-page/events-page.php'] = 'Шаблон страницы Организация мероприятий под ключ';

	return $templates;
}

add_filter( 'theme_page_templates', 'add_templates_to_dropdown' );
