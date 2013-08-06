# Конфигурация

### `set_theme_options`

Хранить глобальные переменные в theme_option.

	<?php set_theme_options(array(
	    'use_header' => true,
	    'header_src' => '/images/header.jpg'
	)); ?>

### `theme_option`

Возвращает глобальные переменные.

	<?php theme_option('use_header'); // returns "true" ?>