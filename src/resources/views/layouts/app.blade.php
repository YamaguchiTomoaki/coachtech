<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtech</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <img src="{{ asset('storage/logo.jpg') }}" alt="logo">
            </div>
            <div class="header__search">
                <input type="text" name="name" placeholder="なにをお探しですか？" value="{{ request('name') }}">
            </div>
            <div class="header__auth">
                @if (Auth::check())
                <a class="header__logout" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
                <form id="logout-form" action="{{ route('login.destroy') }}" method="post" style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
                <a class="header__mypage" href="/mypage">マイページ</a>
                @else
                <a class="header__login" href="/login">ログイン</a>

                <a class="header__register" href="/register">会員登録</a>
                @endif
                <a class="header__sell" href="/sell">出品</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>