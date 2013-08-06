# Конфигурация

После установки Anchor, сайт можно настроить. Для этого нужно отредактировать некоторые **файлы конфигурации**.

## Найдите файлы конфигурации

Все файлы настроек сайта хранятся в папке `anchor/config`, но если вам необходимо изменить специальные части Anchor, читайте далее.

### Красивые URLs

По-умолчанию установщик использует `Apache` и `mod_rewrite`, и пытается включить
и создать **.htaccess** файл для вас. Иногда, установщик не может сделать этого сам. Здесь написано, как удалить `index.php/` из URL.

1.	Отредактируйте файл `anchor/config/app.php` и укажите `url` (патч установки Anchor, если вы использовали подпапку, укажите это здесь).

		return array(
			...
			'url' => '/', // или '/anchor' для подпапки `anchor`

2.	В этом же файле, `anchor/config/app.php`, сделайте `index` пустым.

		return array(
			...
			'index' => ''

3.	Запустите свой сервер.

	#### Apache (mod_rewrite)

	Создайте `.htaccess` файл в корневой папку сайта с таким содержимым:

		<IfModule mod_rewrite.c>
			RewriteEngine On
			RewriteCond %{REQUEST_FILENAME} !-f
			RewriteRule ^ index.php [L]
		</IfModule>

	#### Nginx

	Убедитесь, что хостинг поддерживает `try_files` функцию.

		# http://wiki.nginx.org/HttpCoreModule
		location / {
			try_files $uri $uri/ /index.php;
		}

### Временная зона

если вам необходимо использовать не-UTC временную зону (например использовать `relative_time`
функцию в America/Asia), вам необходимо сменить временную зону Anchor.
Anchor использует [стандартные PHP временные зоны](http://php.net/manual/en/timezones.php);
для того, чтобы найти свою, посмотрите PHP документацию.

Для начала нужно найти вашу веременную зону, затем отредактировать параметр `timezone` в файле
`anchor/config/app.php` (замените Europe/London своей временной зоной).

	return array(
		...
		'timezone' => 'Europe/London',


### Язык

Anchor переведен на множество языков, в том числе и на русский. Для смены языка,
[скачайте перевод здесь](http://github.com/anchorcms/anchor-translations),
загрузите на свой сервер, и смените `language` в файле
`anchor/config/app.php'`.

	return array(
		...
		'language' => 'en_GB',

#### Доступные локализации ([узнать ID](http://www.localeplanet.com/icu/))

Ниже представлен список языков, поддерживаемых Anchor. Русский язык доступен по-умолчанию, начиная с версии 0.9.

- Русская (ru_RU)
- German (de_DE)
- Iberian Spanish (es_ES)
- Estonian (et_EE)
- English (en_GB)
- French (fr_FR)
- Hungarian (hu_HU)
- Italian (it_IT)
- Dutch (nl_NL)
- Brazilian Portuguese (pt_BR)
- Swedish (sv_SE)
- Welsh (cy_GB)

Если вы хотите перевести Anchor на другой язык,
[отправьте запрос](https://github.com/anchorcms/anchor-translations/pull/new/master); убедитесь, что название папки соответствует
[ISO 639 'underscore' ISO 3166](http://www.localeplanet.com/icu/) формату.