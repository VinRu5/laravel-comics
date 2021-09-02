<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>DC Comics - @yield('title')</title>
</head>
<body>
    
    <header>
        @include('templates.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        FOOTER
    </footer>
</body>
</html>