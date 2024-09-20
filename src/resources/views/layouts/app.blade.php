<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/layouts/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__ttl">
            <p class="header__title">Hobbyidea</p>
            <nav class="nav">
                <div class="nav__item">
                    <a class="nav__link" href="{{ route('quiz.mypage') }}">mypage</a>
                </div>
                <div class="nav__item">
                    <a class="nav__link" href="{{ route('quiz.index') }}">home</a>
                </div>
                <div class="nav__item">
                    <form  action="{{ route('logout') }}" method="POST">
                    @csrf
                        <button class="nav__link">logout</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>