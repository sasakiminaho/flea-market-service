<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECHフリマ</title>
    <link rel="stylesheet" href="{{ asset('css//layouts/app2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header-logo">
            <img src="{{ asset('img/logo.svg') }}" alt="" class="header-logo_image">
        </div>
    </header>
    <main>
        <body>
            @yield('content')
        </body>
    </main>
</body>
</html>