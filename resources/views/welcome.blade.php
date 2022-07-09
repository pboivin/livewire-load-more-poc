<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        @livewireStyles
    </head>
    <body class="antialiased p-4">
        <div>
            All posts:
        </div>

        <div>
            <ol class="list-decimal ml-12">
                @foreach (\App\Models\Post::all() as $post)
                    <li>{{ $post->title }}</li>
                @endforeach
            </ol>
        </div>

        @livewireScripts
    </body>
</html>
