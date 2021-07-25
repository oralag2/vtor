### Запуск
Установить PHP-7.3+

Установить MySQL 

Установить composer

Выбрать себе удобную папку c помощью cd        

git clone https://github.com/oralag2/vtor 

cd vtor

composer install (если ошибка то composer install --ignore-platform-reqs и composer update --ignore-platform-reqs)

Добавить бд в phpmyadmin или в другом приложении (или оно создаст бд laravel)

Добавить App_Key командой php artisan key:generate

php artisan migrate --seed перенести бд

php artisan db:seed  сгенерирует 35 пользователей

php artisan serve запустить сервер

Или запустить через оупенсервер положив проект и openserver/domains(в доменах указать имя домена и в пути папку public)
