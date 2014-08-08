<?php

/*
	Home page
*/
Route::get(array('/', 'home'), function() {
	return Layout::create('home', array('homepage' => true));
});

/*
	Blog
*/
Route::get('blog', function() {
	$base = 'http://blog.anchorcms.ru/';
	return Response::create('', 301, array('Location' => $base));
});

/*
	Forum
*/
Route::get('forum', function() {
	$base = 'http://forums.anchorcms.ru/';
	return Response::create('', 301, array('Location' => $base));
});


/*
	Download
*/
Route::get('download', function() {
		return Response::redirect('https://github.com/anchorus/anchor-cms/archive/' . LATEST_VERSION . '.zip');
});

/*
	Resources
*/
Route::get('resources', function() {
	$vars['title'] = 'Ресурсы';
	return Layout::create('resources', $vars);
});

/*
	Stats
*/
Route::get('stats', function() {
	$vars['title'] = 'Статистика';
	$vars['downloads'] = Query::table('downloads')->count();
	$vars['active'] = Query::table('active')->count();

	return Layout::create('stats', $vars);
});

/*
	Latest Version
*/
Route::get('version', function() {
    $vars['title'] = 'Версия';
	return Layout::create('version', $vars);
});


/*	Query::table('active')->insert(get_insert_stats());

	return Response::create(LATEST_VERSION, 200, array('content-type' => 'text/plain'));
});*/

/*
	Github push/pull
*/
Route::any('deploy', function() {
	$msg = gmdate('Y-m-d H:i:s') . ' --> Received post from ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL;
	file_put_contents(APP . 'storage/logs/access.log', $msg, FILE_APPEND);

	exec('git pull ' . PATH, $output);

	foreach($output as $line) {
		$msg = gmdate('Y-m-d H:i:s') . ' --> ' . $line . PHP_EOL;
		file_put_contents(APP . 'storage/logs/term.log', $msg, FILE_APPEND);
	}

	return Response::json('{result: true}');
});

/*
	404 error
*/
Route::not_found(function() {
	$output = Layout::create('error/404', array(
		'title' => 'Такой страницы нет'
	))->yield();

	return Response::create($output, 404);
});