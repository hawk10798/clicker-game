<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <livewire:styles />

        <title>Clicker Game</title>
    </head>
    <body class="antialiased">
        <div class="p-6 bg-slate-300">
            <livewire:header />
            <livewire:counter />
        </div>

        <livewire:scripts />
    </body>
</html>
