# 7steps

## Установка на local сервер

* Скопировать всё содержимое репозитория `meditationacademy/7steps` в корневую директорию сайта
* Создать новую БД (MySQL) с нужным именем и сравнением `utf8mb4_unicode_ci`
* Файл `.env.example` в корневой директории сайта переименовать в `.env` и произвести в нем все необходимые настройки
* Файл `composer.json.local` в корневой директории сайта переименовать в `composer.json`
* Настроить веб-сервер так, чтобы `Document Root` указывал на директорию `public` в корневой директории сайта
* Выполнить в консоли команду `php composer.phar install` из корневой директории сайта
* Выполнить в консоли команду `php artisan migrate` из корневой директории сайта
* Выполнить в консоли команду `php artisan db:seed` из корневой директории сайта
* Выполнить в консоли команду `php artisan storage:link` из корневой директории сайта

## Создание и настройка сервера "meditationacademy" (Forge)

* Создать сервер "meditationacademy" (Frankfurt, php 7.2, mysql 5.7, БД ma) и проверить доступность его IP из России
* Записать куда-нибудь "Sudo Password" и "Database Password"
* Сгенерировать с помощью "Xshell" ssh-ключ "meditationacademy" и загрузить на сервер "meditationacademy.pub", назвав его "Andrey"
* Добавить в правила firewall новое с названием "MySQL" для порта 3306
* Добавить в "FlashFXP" подключение "MeditationAcademy" для юзера "forge" через ключи "meditationacademy"
* Добавить в "Xshell" подключение "MeditationAcademy" для юзера "forge" через ключи "meditationacademy"
* Добавить в "HeidiSQL" подключение "MeditationAcademy" для юзера "forge" с паролем "Database Password"
* Подключиться к БД через "HeidiSQL" и для базы "ma" задать кодировку "utf8mb4_unicode_ci"
* Добавить и настроить сайты: 7steps.asyakin.ru
* Удалить сайт "default"
* Добавить в крон задачу `php /home/forge/7steps.asyakin.ru/artisan schedule:run`

## Создание и настройка сайта "7steps.asyakin.ru" на сервере "meditationacademy" (Forge)

* Добавить на сервер "meditationacademy" сайт "7steps.asyakin.ru" и перейти в него
* Добавить в "Bitbucket" ssh-ключ, указанный при попытке привязать репозиторий, ключу указать имя "MeditationAcademy (Forge)"
* Привязать к сайту репозиторий "meditationacademy/7steps" без установки composer.
* Задать "Deploy Script":
    * `cd /home/forge/7steps.asyakin.ru`
    * `php artisan down`
    * `git pull origin master`
    * `php -d memory_limit=-1 composer.phar install --no-dev`
    * `php artisan up`
    * `( flock -w 10 9 || exit 1`
    * `echo 'Restarting FPM...'; sudo -S service $FORGE_PHP_FPM reload ) 9>/tmp/fpmlock`
* Через sFTP файл `.env.example` в корневой директории сайта переименовать в `.env` и произвести в нем все необходимые настройки
* Через sFTP файл `composer.json.staging` в корневой директории сайта переименовать в `composer.json`
* Выполнить в ssh-консоли в директории сайта команды: 
    * `php -d memory_limit=-1 composer.phar install --no-dev`
    * `php artisan db:seed --force`
    * `php artisan storage:link`
* Добавить обработку Queue (connection: database, queue: 7steps, timeout: 55, sleep: 5, tries: 3, run as daemon)
* В настройках DNS у домена "7steps.asyakin.ru" направить A-запись на IP-адрес сервера "meditationacademy" и дождаться обновления
* Установить SSL-сертификат "LetsEncrypt"

## Дополнительная информация

* PHP 7.2
* MySQL 5.7
* Laravel 6.18
* Metronic 4.7.5
