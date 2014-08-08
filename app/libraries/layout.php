<?php

class Layout {

	public static function create($template, $vars = array()) {
		$vars = array_merge(array(
			'title' => 'Делает мир лучше',
			'page' => Uri::current()
		), $vars);

		return View::create($template, $vars)
			->partial('header', 'partials/header', $vars)
			->partial('footer', 'partials/footer', $vars);
	}

}