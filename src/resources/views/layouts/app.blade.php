<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECHフリマ</title>
    <link rel="stylesheet" href="{{ asset('css//layouts/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header-logo">
            <img src="{{ asset('img/logo.svg') }}" alt="" class="header-logo_image">
        </div>
        <div class="header-list">
            <div class="search">
                <input type="text" class="search-box" placeholder="何をお探しですか？">
            </div>
        </div>
        <div class="transition_button">
            <div class="login">
                <a href="" class="login-button">ログイン</a>
            </div>
            <div class="register">
                <a href="" class="register-button">会員登録</a>
            </div>
            <div class="sell">
                <a href="" class="sell-button">出品</a>
            </div>
        </div>
    </header>
    <main>
        <body>
            @yield('content')
        </body>
    </main>
    </script>
</body>
</html>