<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'false'
            }
        </script>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" />
        @notifyCss
    </head>

    <body>
        <livewire:nav />
        <main>
            {{ $slot }}
        </main>
        @livewire('wire-elements-modal')
        <x-notify::notify />
        @notifyJs
    </body>

</html>