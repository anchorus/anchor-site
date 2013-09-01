# Запись (одна)

### `article_author`

Возвращает имя автора записи в виде строки.

### `article_author_bio`

Возвращает информацию об авторе записи.

### `article_author_id`

Возвращает ID атора записи из базы данных.

### `article_css`

Если дополнительный CSS был добавлен, возвращает дополнительный CSS. Следует использовать так:

	<?php if(article_css()): ?>
	    <style><?php echo article_css(); ?></style>
	<?php endif; ?>

### `article_custom_field($key, $fallback = '')`

Возвращает дополнительное поле с параметром $key. Следует использовать так:

	<small class="attribution">
	    Благодарим <?php echo article_custom_field('attribution', 'Идиота'); ?>
	</small>

### `article_date`

Возвращает дату добавления. Формат по-умолчанию is jS M, Y (24th Января, 2014).

### `article_description`

Возвращает краткое описание записи, указанное при добавлении.

### `article_markdown`

Возвращает полный текст записи в формате MarkDown.

### `article_id`

Возвращает ID записи из базы данных.

### `article_js`

Похоже на article_css(), но с Javascript. Следует использовать так:

	<?php if(article_js()): ?>
	    <script><?php echo article_js(); ?></script>
	<?php endif; ?>

### `article_slug`

Возвращает URL записи. Не следует использовать в файле in posts.php (используйте `article_url()` для корректного отображения URL).

### `article_status`

Возвращает статус записи. Может быть публикация, черновик или архив.

### `article_time`

Возвращает время в UNIX-формате. 

### `article_title`

Возвращает заголовок записи, указанный в панели управления.

### `article_total_comments`

Возвращает полное количество комментариев, добавленных к записи.

### `article_url`

Возвращает полный URL адрес записи. Следует использовать так:

	<a href="<?php echo article_url(); ?>">
	    <?php echo article_title(); ?>
	</a>
	
### `article_category`

Возвращает название категории записи.

### `article_category_url`

Возвращает URL категории записи.

### `customised`

Возвращает `true` или `false`, если дополнительный CSS/JavaScript был добавлен.
