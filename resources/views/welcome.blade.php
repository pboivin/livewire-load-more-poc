<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        @livewireStyles
    </head>
    <body class="antialiased px-4">
        <div class="max-w-6xl mx-auto">
            @livewire('post-list')
        </div>

        @livewireScripts
    </body>
</html>
