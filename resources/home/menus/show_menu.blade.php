<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menus</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="menu">
            {{ $menu->menu }}
        </h1>
        <div class="content">
            <div class="content_menu">
                <h3>詳細</h3>
                <p>{{ $menu->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">前のページへ</a>
        </div>
    </body>
</html>