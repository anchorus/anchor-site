<p class="note"><b>Внимание!</b> Данный раздел документации в данный момент не полностью перевден на русский язык и может содержать ошибки. Рекомендуем ознакомиться с документацией на <a href="//anchorcms.com/docs/">официальном сайте</a>.</p>

# Base

Класс `Base` возвращает префикс таблиц в базе данных Anchor.

`public static function table(string $name = '')`

### Возвращает

Строку с префиксом таблиц БД.

### Пример

	Base::table(); // возвращает 'anchor_'

	Post::table(); // возвращает 'anchor_posts'

	Base::table('posts'); // возвращает `anchor_posts`