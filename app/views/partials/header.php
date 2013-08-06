<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Anchor CMS &mdash; <?php echo $title; ?></title>
		<meta name="description" content="Anchor is a lightweight blogging platform with a focus on simplicity and elegance.">

		<link rel="stylesheet" href="<?php echo asset('assets/css/editor.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('assets/css/main.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('assets/css/small.css'); ?>" media="(max-width: 600px)">

		<link rel="shortcut icon" href="<?php echo asset('assets/img/favicon.png'); ?>">

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">
		<meta name="wot-verification" content="d48de25abfc61df73516"/>
	</head>

	<body class="<?php echo isset($homepage) ? 'home' : ''; ?>">

		<header id="top">
			<nav class="wrap">
				<a href="/" title="Go to the Anchor homepage">
					<img src="<?php echo asset('assets/img/logo.png'); ?>" alt="Anchor CMS">
				</a>

				<ul>
				
				
				<?php foreach(array('blog') as $link): ?>
					 <?php $class = (strpos($page, $link) !== false) ? ' class="active"' : ''; ?>
					 <li<?php echo $class; ?>><a href="//blog.anchorcms.ru">Блог</a></li>
				 <?php endforeach; ?>
				 
				 <?php foreach(array('docs') as $link): ?>
					 <?php $class = (strpos($page, $link) !== false) ? ' class="active"' : ''; ?>
					 <li<?php echo $class; ?>><a href="/docs">Помощь</a></li>
				 <?php endforeach; ?>
				 
				 <?php foreach(array('resources') as $link): ?>
					 <?php $class = (strpos($page, $link) !== false) ? ' class="active"' : ''; ?>
					 <li<?php echo $class; ?>><a href="/resources">Ресурсы</a></li>
				 <?php endforeach; ?>
				 				 				 
				 <?php foreach(array('forum') as $link): ?>
					 <?php $class = (strpos($page, $link) !== false) ? ' class="active"' : ''; ?>
					 <li<?php echo $class; ?>><a href="//forums.anchorcms.ru">Форум</a></li>
				 <?php endforeach; ?>
				 
				 <?php foreach(array('download') as $link): ?>
					 <?php $class = (strpos($page, $link) !== false) ? ' class="active"' : ''; ?>
					 <li<?php echo $class; ?> class="download"><a href="/download">Скачать</a></li>
				 <?php endforeach; ?>				</ul>
			</nav>


			<?php if(isset($homepage)): ?>
				<div class="wrap">
					<h1>Anchor это очень простая<br>и лёгкая система для блога, <br>создана, чтобы просто писать.</h1>
					<?php echo Html::link('download', 'Скачать <span>версию ' . LATEST_VERSION . '</span>', array('class' => 'btn')); ?>
				</div>

				<img class="screenie" alt="Скриншет Anchor CMS" src="<?php echo asset('assets/img/screenshot.png'); ?>">
			<?php elseif(isset($title)): ?>
				<h1 class="wrap"><?php echo $title; ?></h1>
			<?php endif; ?>
		</header>