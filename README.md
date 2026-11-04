# Laravel Product Catalog

An early-stage Laravel 12 product catalog. The authentication layer and the product data model are in place, and the catalog screens are the next step.

## What's built

- **Custom authentication:** sign-up, sign-in and sign-out with `Auth::attempt` and hashed passwords, with guest-only and authenticated route groups
- **Product model and migration:** name, image, description, price, a sold flag and the owning user, with mass-assignment rules on the model
- **Admin layout** on AdminLTE 3, with signed-in pages for products and the user profile
- **Form validation** in the browser with jQuery Validation, and on the server

## Status

The products page still uses the theme's sample layout. Listing, creating and editing products from the `products` table aren't built yet.

## Tech stack

PHP 8.2+, Laravel 12, MySQL, Blade, AdminLTE 3, Bootstrap 4 and jQuery Validation.

## Getting started

You need PHP 8.2 or newer, Composer and MySQL.

```bash
git clone https://github.com/abdullahrather/laravel-product-catalog.git
cd laravel-product-catalog
composer install
cp .env.example .env
php artisan key:generate
```

Set the `DB_*` values in `.env`, then run:

```bash
php artisan migrate
php artisan serve
```

Open http://localhost:8000 and create an account on the sign-up page.

## License

MIT
