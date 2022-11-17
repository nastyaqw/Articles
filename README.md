## Laravel Photo Gallery

[Live Demo]()
![Снимок экрана 2022-11-17 215558](https://user-images.githubusercontent.com/79269539/202521533-62a2598f-7f9f-4f1f-a836-a3cacddbd3ba.jpg)
[Admin panel](http://10.73.96.37:8000/admin)
![Снимок экрана 2022-11-17 215826](https://user-images.githubusercontent.com/79269539/202521989-015d0f58-d0bd-4b41-ab46-7d1479d96e8c.jpg)
**Laravel Photo Gallery** is a photo uploading application.

### Installation

- git clone https://github.com/nastyaqw/gallery gallery
- cd gallery
- cp .env.example .env
- composer install
- composer update
- php artisan key:generate
- create a database in phpMyadmin and inform .env (DB_DATABASE)
- php artisan migrate --seed, to create and populate tables
- php artisan serve, to start the app on http://localhost:8000/

### Features

-   Home page
-   Authentication (registration, login, logout, password)
-   Users roles : roles,permission
-   Photo Upload Option
-   Admin dashboard


### Tricks

To add posts:

-   Redactor : email = n@v.com, password = 123

