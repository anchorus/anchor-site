<p class="note"><b>Внимание!</b> Данный раздел документации в данный момент не полностью перевден на русский язык и может содержать ошибки. Рекомендуем ознакомиться с документацией на <a href="//anchorcms.com/docs/">официальном сайте</a>.</p>

# Category

Класс `Category` расширяет клас `Base`.

`public static function dropdown(void)`

### Возвращает

Массив категорий, сортированый по ID.

### Пример

	<?php foreach(Category::dropdown() as $id => $category): ?>

		<option value="<?php echo $id; ?>"><?php echo $category; ?></option>

	<?php endforeach; ?>


`public static function slug(string $slug)`

### Возвращает

New instance of the `Category` object or null if not found

### Пример

	$category = Category::slug('my-category-slug');

	echo $category->title;

	$category->title = 'New Title';

	$category->save();


`public static function paginate(int $page = 1, int $perpage = 10)`

### Возвращает

New instance of the `Paginator` class

### Пример

	$paging = Category::paginate(1, 10);

	$paging->links(); // returns <a href="BASE/category/1">First</a> ...

	foreach($paging->results as $category) {
		echo $category->title;
	}