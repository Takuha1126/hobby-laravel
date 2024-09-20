<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <header class="header">
        <div class="header__ttl">
            <p class="header__title">Hobbyidea</p>
            <nav class="nav">
                <div class="nav__item">
                    <a class="nav__link" href="{{ route('login') }}">login</a>
                </div>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="main__ttl">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="main__group">
                <p class="main__title">register</p>
            </div>
            <div class="main__about">
                <div class="main__item">
                    <label class="label">name</label>
                    <input type="text" name="name" placeholder="name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="main__item">
                    <label class="label">email</label>
                    <input type="email" name="email" placeholder="email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="main__item">
                    <label class="label">password</label>
                    <input type="password" name="password" placeholder="password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="button">
                <button class="button__ttl">register</button>
            </div>
        <form>
        </div>
    </main>
</body>
</html>