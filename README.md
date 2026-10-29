# Number-draw probability exercise — API

A small Laravel 8 exercise exposing a combinatorics calculation through `POST /api/get-results`. The endpoint accepts `number_of_balls` and `balls_drawn` and returns results for matching draw counts.

## Review path

- [API route](routes/api.php)
- [Calculation and JSON response](app/Http/Controllers/HomeController.php)
- [Paired Angular frontend](https://github.com/waleedmazhar64/spinola-task-frontend)
- [Runtime and dependencies](composer.json)

## Local evaluation

Use PHP compatible with the checked-in Composer constraints and install from `composer.lock`. Copy `.env.example` to a local `.env`, generate the application key and configure a disposable environment before `php artisan serve`.

## Status

Historical coding exercise. Input bounds, zero/negative values, overflow and the `factorial()` dependency need verification before relying on the calculation. The API and tests were not run in this documentation review. This is not a commercial gambling platform or a claim of production deployment.
