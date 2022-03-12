<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/salim114/laragotables/blob/master/public/images/LaraGoTables.jpg?raw=true" with="400"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About LaraGoTables

LaraGoTables is a contribution for Laravel community trying to clear the way for the integration of the excellent DataTables JQuery inside projects and to enlarge the use of it, throw its varieties of features (examples) and extensions.

## Laravel introduction

[Laravel](https://laravel.com/) is a free, open-source PHP web framework, created by Taylor Otwell. It is a powerful Model-View-Controller (MVC) PHP framework, designed for developers who need a simple and elegant toolkit to create full-featured web applications.

## Datatables introduction 

[Datatables](https://datatables.net/) is a powerful Javascript library for adding interaction features to HTML tables, and while simplicity is a core design principle for the project as a whole, it can be quite daunting to get started. In this article I'll introduce the basic concepts that you will need to know to get going with DataTables, and you will find that in a very short space of time you'll be able to create advanced table controls, tuned to your specific requirements.

### Setup:

All you need is to run these commands:

```bash

git clone https://github.com/salim114/laragotables

cd laragotables

composer install # Install backend dependencies

cp .env.example .env # Update database credentials configuration

php artisan key:generate # Generate new keys for Laravel

php artisan migrate:fresh --seed # Run migration and seed users and categories for testing

npm run production # To compile assets for prod

```

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
