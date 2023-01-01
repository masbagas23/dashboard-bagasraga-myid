## Features
- Manage articles and categories
- Commenting System.
- Article Tags Managment.
- Contact form.
- Pictures Gallery.
- User management.
- WYSIWYG Editor

## Requirements
- Requires a minimum PHP version of 8.0


### Installation

Requires Composer.


1. Install the dependencies using composer

```sh
$ cd your-project-directory
$ composer install
```

2. Open .env.example and save it as ".env"

3. Generate application key using :

```sh
$ php artisan key:generate
```



4. Create a mysql database and enter database credentials in your .env file  

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_writer
DB_USERNAME=root
DB_PASSWORD=
```

5. Run the migration :

```sh
$ php artisan migrate
```


6. Finally start the development server :

```sh
$ php artisan serve
```



