<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @stack('styles')
    </head>
    <body>
        <x-header></x-header>
        {{ $slot }}
        @stack('scripts')
    </body>
</html>
