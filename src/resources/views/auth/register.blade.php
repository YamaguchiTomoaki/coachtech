@extends('auth.auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}" />
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__ttl">
        <h2 class="ttl__text">会員登録</h2>
    </div>
    <div class="register-form__inner">
        <form class="register-form" action="/register" method="post">
            @csrf
            <div class="register-form__group">
                <p class="register-form__text">名前</p>
                <input class="register-form__input" type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="error-message__group">
                <p class="register-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <p class="register-form__text">メールアドレス</p>
                <input class="register-form__input" type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="error-message__group">
                <p class="register-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group">
                <p class="register-form__text">パスワード</p>
                <input class="register-form__input" type="password" name="password">
            </div>
            <div class="error-message__group">
                <p class="register-form__error-message">
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="register-form__group--button">
                <button class="register-form__button" type="submit">登録する</button>
            </div>
            <div class="login__group">
                <a class="login__link" href="/login">ログインはこちら</a>
            </div>
        </form>
    </div>
</div>
@endsection