<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body>
       <h1>Test Laravel fotsiny</h1>

       <p>Its currently {{ 2+6}}.</p>

       <footer>
           <p>&copy;Copyrigth {{ date('Y') }} by mika &middot;<a href="about-us">About us </a> </p>
       </footer>

    </body>
</html>
