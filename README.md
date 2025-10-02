# Laravel SQLite Starter

This repository contains a fresh [Laravel](https://laravel.com) installation configured to use **SQLite** by default along with a Vite-powered **Tailwind CSS** build.

## Getting started

1. Install PHP dependencies:
   ```bash
   composer install
   ```
2. Install frontend tooling:
   ```bash
   npm install
   ```
3. Copy the environment file and generate an application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Ensure the SQLite database file exists (one is committed at `database/database.sqlite`). Run the migrations:
   ```bash
   php artisan migrate
   ```
5. Build frontend assets during development:
   ```bash
   npm run dev
   ```

The default welcome page (available via `php artisan serve`) is styled with Tailwind utilities.
