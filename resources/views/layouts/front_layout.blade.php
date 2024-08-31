<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Front Page</title>
    @stack('custom_css')
</head>
<body>
    <header>
        @include('frontpage.partials.navbar')
    </header>
    <h1>Front Page ប្រើប្រាស់រួម</h1>

    <main>
        @yield('content')
    </main>
    <sidebar>
         @yield('sidebar')
    </sidebar>

    <footer>
        @include('frontpage.partials.footer')
    </footer>
    @stack('custom_js')
    @stack('crud_js')
</body>
</html>


