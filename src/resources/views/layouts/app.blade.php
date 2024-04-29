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
    @if(Auth::check())
    <header class="header">
        <div class="header-logo">
            <a href="/"><img src="{{ asset('img/logo.svg') }}" alt="" class="header-logo_image"></a>
        </div>
        <div class="header-contents">
            <div class="header-list">
                <form action="{{ route('search') }}"></form>
                <div class="search">
                    <input type="text" class="search-box" placeholder="何をお探しですか？">
                    <button class="search_button"><img src="{{ asset('img/logo.svg') }}" alt="" class="header-logo_image"></button>
                </div>
            </div>
            <div class="transition_button">
                <form  action="{{ route('logout') }}" method="post">
                    @csrf
                    <div class="logout">
                        <button type="submit" class="logout-button">ログアウト</button>
                    </div>
                </form>
                <div class="my_page">
                    <a href="/my_page" class="my_page-button">マイページ</a>
                </div>
                <div class="sell">
                    <a href="/sell" class="sell-button">出品</a>
                </div>
            </div>
        </div>
    </header>
    @else
    <header class="header">
        <div class="header-logo">
            <a href="/"><img src="{{ asset('img/logo.svg') }}" alt="" class="header-logo_image"></a>
        </div>
        <div class="header-contents">
            <div class="header-list">
                <div class="search">
                    <input type="text" class="search-box" placeholder="何をお探しですか？">
                </div>
            </div>
            <div class="transition_button">
                <div class="login">
                    <a href="/login" class="login-button">ログイン</a>
                </div>
                <div class="register">
                    <a href="/register" class="register-button">会員登録</a>
                </div>
                <div class="sell">
                    <a href="/sell" class="sell-button">出品</a>
                </div>
            </div>
        </div>
    </header>
    @endif
    <main>
        <body>
            @yield('content')
        </body>
    </main>
    </script>
</body>
</html>