<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-slate-100 text-slate-900">
        <div class="min-h-screen flex flex-col items-center justify-center gap-6">
            <h1 class="text-4xl font-bold">Welcome to Laravel with SQLite & Tailwind</h1>
            <p class="text-lg text-slate-600 max-w-xl text-center">
                This starter uses SQLite out of the box. Run <code class="px-2 py-1 bg-slate-200 rounded">php artisan migrate</code> after installing dependencies.
            </p>
            <a class="px-4 py-2 rounded bg-indigo-600 text-white hover:bg-indigo-500 transition" href="https://laravel.com/docs">Read the documentation</a>
        </div>
    </body>
</html>
