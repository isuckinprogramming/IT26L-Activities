<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page title","Template title")</title>

    {{-- <link rel="stylesheet" href=" asset('css/app.css') "> --}}
    {{-- <link rel="stylesheet" href="testingcss/HomepageStyle.css"> --}}
    @yield("head tags")
</head>
<body>
    {{-- used this shit to get done, but wwrong shit
        header{lorem10}+nav>a{Link $ to be filled}*5^main>p{lorem50}^footer{lorem20} --}}
    {{-- 1 --}}
    <header>
        @yield("header content")
    </header>
    {{-- 2 --}}
    <nav>
        @yield("nav links")
    </nav>
    {{-- 3 --}}
    <div>
        @yield("before main content")
    </div>

    {{-- 4 --}}
    <main>
        @yield("main content")
    </main>
    {{-- 5 --}}
    <div>
        @yield("after main content")
    </div>
    {{-- 6 --}}
    <footer>
        @yield("footer content")
    </footer>
</body>
</html>
