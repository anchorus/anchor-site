<?php

Route::get(array('docs', 'docs/(:any)', 'docs/(:any)/(:any)'), function() {
	$args = func_get_args();

	if( ! count($args)) {
		$args = array('getting-started', 'requirements');
	}

	if( ! is_readable($path = APP . 'views/docs/' . implode('/', $args) . '.md')) {
		$output = Layout::create('error/404', array(
			'title' => 'Страница не найдена'
		))->yield();

		return Response::create($output, 404);
	}

	$content = file_get_contents($path);

	$md = new Markdown;
	$vars['content'] = $md->transform($content);
	$vars['title'] = 'Документация';

	return Layout::create('docs/index', $vars)->partial('sidebar', 'partials/sidebar');
});