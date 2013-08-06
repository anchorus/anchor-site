# Обновление

**Скопируйте свою базу данных и файлы!**

Здесь показан пример, как сделать бэкап mysql, используя SSH:

	mysqldump
		--compact
		--quick
		--user имяюзера
		--password=парольюзера
		--host=localhost имябд > /путь/для/сохранения/db.sql

также копируем файлы:

	tar --create
		--gzip
		--file=/home/myusername/backups/anchor.tgz
		--directory=/path/to/my/site/httpdocs

### Обновление с версии 0.8 и выше

1.	Скачайте [последнюю версию](/download)
2.	Распакуйте архив и скопируйте/вставьте/замените папки `anchor`, `system` и файл `index.php`.
3.	Готово!

### Обновление со старых версий (0.8 и ниже)

1.	Удалите старую папку `system`.

2.	Скачайте последнюю версию и распакуйте архив.

3.	Загрузите и замените все файлы на вашем сервере.

	*Если вы изменяли стандартный шаблон, переименуйте его! Иначе он будет перезаписан.*

4.	Скопируйте базу данных и файлы для примера конфигурации.

		cp install/storage/application.distro.php anchor/config/application.php

		cp install/storage/database.distro.php anchor/config/database.php

5.	Отредактируйте новые файлы, используя старый config.php.

	Например, мой старый файл натсроек выглядел так:

		'host' => 'anchor-cms-demo.mysql.eu1.frbit.com',
		'port' => '3306',
		'username' => 'anchor-cms-demo',
		'password' => 'my-awesome-password',
		'name' => 'anchorcms',
		'collation' => 'utf8_bin'

	Теперь так:

		'driver' => 'mysql',
		'hostname' => 'anchor-cms-demo.mysql.eu1.frbit.com',
		'port' => 3306,
		'username' => 'anchor-cms-demo',
		'password' => 'my-awesome-password',
		'database' => 'anchorcms'

6.	Запустите свой сайт. Все готово.