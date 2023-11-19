<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About SimpleUserOrganization

SimpleUserOrganization is a simple laravel 10 project how session/cache works to manage the active session organization for logged-in users.

Here's a case, let's say you create an HRM application but manage 2 different organizations, there are many ways to manage each organization, for example, in every form in the application there must be an input select organization, that's one of them.

The way I use is to use/utilize the session to activate the organization we want and every form will automatically set the data on the active organization, then you can also change the active organization to another organization as long as you are part of the organization.

## How to use

1. Clone this repository
2. Run `composer install`
3. Run `php artisan migrate:fresh --seed`
4. Run `php artisan storage:link`
5. Setup your database in `.env` file
6. Setup your smtp/mail in `.env` file cause this project use email verification for register (required)
7. Run `php artisan serve`
