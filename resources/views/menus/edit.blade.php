<x-app-layout>
    <x-slot name="header">
        　メニュー編集
    </x-slot>    
    <body>
        <h1 class="title">メニュー内容編集</h1>
        <div class="content">
            <form action="/menus/{{ $menu->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>メニュー名</h2>
                    <input type='text' name='menu[menu_name]' value="{{ $menu->menu_name }}">
                </div>
                <div class='content__body'>
                    <h2>メニュー詳細</h2>
                    <input type='text' name='menu[menu_content]' value="{{ $menu->menu_content }}">
                </div>
                <input type="submit" value="更新">
            </form>
        </div>
    </body>
</x-app-layout>