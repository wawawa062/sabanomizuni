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
        <a href='/menus/create'>メニューの追加</a>
        <div class='menus'>
            @foreach ($menus as $menu)
                <div class='menu'>
                    <h2 class='menu'><a href="/menus/{{ $menu->id }}">{{ $menu->menu }}</a></h2>
                    <p class='content'>{{ $menu->content_menu }}</p>
                    <form action="/menus/{{ $menu->id }}" id="form_{{ $menu->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $menu->id }})">このメニューを削除</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $menus->links() }}
        </div>
        <script>
            function deleteMenu(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>