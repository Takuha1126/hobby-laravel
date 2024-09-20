<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/auth/verify.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__ttl">
            <p class="header__title">Hobbyidea</p>
        </div>
    </header>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('メールアドレスを確認してください') }}</div>
                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('新しい確認リンクがメールアドレスに送信されました。') }}
                                </div>
                            @endif
                            {{ __('続行する前に、メールに確認リンクがあるかを確認してください。') }}
                            {{ __('メールが届かない場合') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('こちらをクリックして再送信してください') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
