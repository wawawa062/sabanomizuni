<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Menu</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Menuname</h1>
        <div class='menus'>
            @foreach ($menus as $menu)
                <div class='menu'>
                    <h2 class='menu'><a href="/menus/{{ $menu->id }}">{{ $menu->menu }}</a></h2>
                    <p class='detail'>This is a sample body.</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $menus->links() }}
        </div>
    </body>
</html>