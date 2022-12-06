## Сайт статей на Laravel

### Установка

- git clone https://github.com/nastyaqw/Articles name project
- cd name project
- cp .env.example .env
- composer install
- composer update
- php artisan key:generate
- create a database in phpMyadmin and inform .env (DB_DATABASE)
- php artisan migrate --seed, to create and populate tables
- php artisan voyager:install
- php artisan voyager:install --with-dummy
- php artisan serve, to start the app on http://localhost:8000/

### Состав сайта

-   Домашняя страница
-   Аутентификация (регистрация, логин, пароль)
-   Роли для пользоваетлей : роли,разрешения
-   Опция загрузки фото
-   Административная панель



Вход в админ-панель:
- Администратор : логин = admin@admin.com пароль = password
- Редактор : логин = n@v.com, пароль = 123

