<html>
    <head>
        <title>@yield('title')</title>
        @yield('css')
    </head>
    <header>
        <a class="logo" href="/"></a>
        <a class="menubutton" href="/form">Форма</a>
        <a class="menubutton" href="/table">Таблица</a>
    </header>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>