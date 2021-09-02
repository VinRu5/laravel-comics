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
        @include('templates.header',
        [
        'navList' => [
        'CHARACTERS',
        'COMICS',
        'MOVIES',
        'TV',
        'GAMES',
        'COLLECTIBLES',
        'VIDEOS',
        'FANS',
        'NEWS',
        'SHOP',
        ]
        ])
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('templates.footer',
        [
        'footerList' => [
        'DC COMICS' => [
        'Characters',
        'Comics',
        'Movies',
        'TV',
        'Games',
        'Videos',
        'News',
        ],
        'SHOP' => [
        'Shop DC',
        'Shop DC Collectibles',
        ],
        'DC' => [
        'DC',
        'Term Of Use',
        'Privacy policy(New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Concatc Us'
        ],
        'SITES' => [
        'DC',
        'MAD Magazine',
        'DC Kids',
        'DC Universe',
        'DC Power Visa',
        ]
        ]
        ])

    </footer>
</body>

</html>