@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
@endsection

@section('content')
<div class="profile__content">
    <div class="profile__ttl">
        <p class="ttl__text">プロフィール設定</p>
    </div>
    <form class="profile-form" action="/mypage/profile" enctype="multipart/form-data" method="post">
        @csrf
        <div class="profile__image">
            @if ($user['image'] != null)
            <img class="user__image" src="{{ asset('storage/' . $user['image']) }}" alt="プロフィール画像">
            @else
            <img class="default__image" src="{{ asset('storage/アイコン.jpg') }}" alt="プロフィール画像">
            @endif
            <label class="file__label" for="form__image">
                <input type="file" id="form__image" class="image__file" name="image" accept=".jpg">
            </label>
        </div>
        <div class="error-message__group">
            <p class="profile-form__error-message">
                @error('image')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="profile__name">
            <p class="input__ttl">ユーザー名</p>
            <input type="text" name="name" value="{{ old('name',$user['name']) }}">
        </div>
        <div class="error-message__group">
            <p class="profile-form__error-message">
                @error('name')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="profile__postcode">
            <p class="input__ttl">郵便番号</p>
            @if ($profile != null)
            <input type="text" name="postcode" value="{{ old('postcode',$profile[0]['postcode']) }}">
            @else
            <input type="text" name="postcode" value="{{ old('postcode') }}">
            @endif
        </div>
        <div class="error-message__group">
            <p class="profile-form__error-message">
                @error('postcode')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="profile__address">
            <p class="input__ttl">住所</p>
            @if ($profile != null)
            <input type="text" name="address" value="{{ old('address',$profile[0]['address']) }}">
            @else
            <input type="text" name="address" value="{{ old('address') }}">
            @endif
        </div>
        <div class="error-message__group">
            <p class="profile-form__error-message">
                @error('address')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="profile__building">
            <p class="input__ttl">建物名</p>
            @if ($profile != null)
            <input type="text" name="building" value="{{ old('building',$profile[0]['building']) }}">
            @else
            <input type="text" name="building" value="{{ old('building') }}">
            @endif
        </div>
        <div class="error-message__group">
            <p class="profile-form__error-message">
                @error('building')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="profile__button">
            <button class="profile-form__button" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection