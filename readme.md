<h1>Тестовое задание для компании Code&Care</h1>

как использовать:<br>
дамп базы - codeandcare_db.sql файл в корне проекта импортировать локально<br>
настройки сервера - в файле .env установить настройки БД<br>
клонировать проект, index находится в public<br>

что реазиванно:

Тестовое задание реализованно на фреймовке Laravel 5.4<br>

при запуске index, если импортирована БД, увидите две таблицы с данными по курсу Coin'ов blockchain и coindesk<br>
В таблице будут отображаться три последние записи из БД по дате<br>
Если запустить в консоли команду 'php artisan pull:coinValue' произойдет пулл актуальных данных с сайтов в базу данных 
и произойдет запись данных в LOG, и если обновить страницу index обновиться записи в таблицах<br>


Как работает:<br>


В App/Console/Commands/PullCoinValue.php - описана вся логика работы консольной команды, код с комментариями<br>
В App/Http/Controllers/CoinValueController.php - метод ShowTable достаем данные из БД и возвращаем view 'welcome' с данными<br>
В resources/views/welcome.blade.php - вьюха с таблицами<br>

Тайм код, и порядок выполнения работы можно отследить по коммитам на GITHUB'e