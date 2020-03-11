## About this project
This is for the coding exam provided by Flexisource IT.

- Clone this repository.
- Navigate to the folder and run `composer install`
- Copy .env.example to a new file with a name of `.env`
- Modify the database configuration on `.env`
- Run `php artisan migrate`
- Run `php artisan schedule:run`
- For testing, run `vendor/bin/phpunit`, the test cases doesn't run RefreshDatabase trait.

Laravel is accessible, powerful, and provides tools required for large, robust applications.
