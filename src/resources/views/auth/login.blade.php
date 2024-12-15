@extends('auth.auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}" />
@endsection

@section('content')
<div class="login-form__content">
    <div class="login-form__ttl">
        <h2 class="ttl__text">ログイン</h2>
    </div>
    <div class="login-form__inner">
        <form class="login-form" action="/login" method="post">
            @csrf
            <div class="login-form__group">
                <p class="login-form__text">メールアドレス</p>
                <input class="login-form__input" type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="error-message__group">
                <p class="login-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="login-form__group">
                <p class="login-form__text">パスワード</p>
                <input class="login-form__input" type="password" name="password">
            </div>
            <div class="error-message__group">
                <p class="login-form__error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="login-form__group--button">
                <button class="login-form__button" type="submit">ログインする</button>
            </div>
            <div class="register__group">
                <a class="register__link" href="/register">会員登録はこちら</a>
            </div>
        </form>
    </div>
</div>
@endsection