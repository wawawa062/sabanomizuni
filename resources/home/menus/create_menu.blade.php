<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Menu</title>
    </head>
    <body>
        <h1>Menu Name</h1>
        <form action="/menus" method="POST">
            @csrf
            <div class="Menu">
                <h2>メニュー名</h2>
                <input type="text" name="menu[name_manu]" placeholder="メニュー名" value="{{ old('menu.name_menu') }}"/>
                 <p class="name_manu__error" style="color:red">{{ $errors->first('menu.name_manu') }}</p>
            </div>
            <div class="content_menu">
                <h2>メニュー詳細</h2>
                <textarea name="menu[content_menu]" placeholder="詳細">{{ old('menu.content_menu') }}</textarea>
                <p class="content_menu__error" style="color:red">{{ $errors->first('menu.content_menu') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">前のページへ</a>
        </div>
    </body>
</html>