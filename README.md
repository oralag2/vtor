### Запуск
Установить PHP-7.3+

Установить MySQL 

Установить composer

Выбрать себе удобную папку cd project

git clone https://github.com/oralag2/vtor rtov

cd rtov

composer install (если ошибка то composer install --ignore-platform-reqs или composer update --ignore-platform-reqs)

Добавить бд в phpmyadmin или в другом приколе) 

Добавить App_Key команлрй php artisan key:generate

php artisan migrate --seed перенести бд

php artisan serve запустить сервер

Или запустить через оупенсервер положив проект и openserver/domains(в доменах указать имя домена и в пути папку public)
