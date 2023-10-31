<x-app-layout>
    <x-slot name="header">
        　新しくメニューを追加
    </x-slot>    
    <!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Menu</title>
        </head>
        <body>
            <h1>Menu Name</h1>
            <form action="/menus" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="Menu">
                    <h2>メニュー名</h2>
                    <input type="text" name="menu[menu_name]" placeholder="メニュー名" value="{{ old('menu.menu_name') }}"/>
                     <p class="menu_name__error" style="color:red">{{ $errors->first('menu.menu_name') }}</p>
                </div>
                <div class="content_menu">
                    <h2>メニュー詳細</h2>
                    <textarea name="menu[menu_content]" placeholder="詳細">{{ old('menu.menu_content') }}</textarea>
                    <p class="menu_content__error" style="color:red">{{ $errors->first('menu.menu_content') }}</p>
                </div>
                <div class="image">
                    <input type="file" name="menu_image">
                 </div>
                <input type="submit" value="保存"/>
            </form>
            <div class="footer">
                <a href="/">前のページへ</a>
            </div>
        </body>
    </html>
</x-app-layout>