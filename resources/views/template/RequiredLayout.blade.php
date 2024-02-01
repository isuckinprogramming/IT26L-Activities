<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page title","Template title")</title>

    {{-- <link rel="stylesheet" href=" asset('css/app.css') "> --}}
    {{-- <link rel="stylesheet" href="testingcss/HomepageStyle.css"> --}}
        @yield("stylesheets")
</head>
<body>
    {{-- header{lorem10}+nav>a{Link $ to be filled}*5^main>p{lorem50}^footer{lorem20} --}}
    <header>
        @yield("header content")
        <div>
            <p>test</p>
        </div>
    </header>
    <nav>
        @yield("nav links")
    </nav>
    @yield("before main content")
    <main>
        @yield("main content")
    </main>
    @yield("after main content")
    <footer>
        @yield("footer content")
    </footer>
</body>
</html>
