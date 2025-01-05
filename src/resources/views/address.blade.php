@extends('auth.auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}" />
@endsection

@section('content')
<div class="address__content">
    <div class="address__ttl">
        <p class="ttl__text">住所の変更</p>
    </div>
    <form class="address-form" action="/purchase/address" method="post">
        @csrf
        <input type="hidden" name="item_id" value="{{ $item_id }}">
        <div class="address__postcode">
            <p class="input__ttl">郵便番号</p>
            @if ($profile != null)
            <input type="text" name="postcode" value="{{ old('postcode',$profile[0]['postcode']) }}">
            @else
            <input type="text" name="postcode" value="{{ old('postcode') }}">
            @endif
        </div>
        <div class="error-message__group">
            <p class="address-form__error-message">
                @error('postcode')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="address__address">
            <p class="input__ttl">住所</p>
            @if ($profile != null)
            <input type="text" name="address" value="{{ old('address',$profile[0]['address']) }}">
            @else
            <input type="text" name="address" value="{{ old('address') }}">
            @endif
        </div>
        <div class="error-message__group">
            <p class="address-form__error-message">
                @error('address')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="address__building">
            <p class="input__ttl">建物名</p>
            @if ($profile != null)
            <input type="text" name="building" value="{{ old('building',$profile[0]['building']) }}">
            @else
            <input type="text" name="building" value="{{ old('building') }}">
            @endif
        </div>
        <div class="error-message__group">
            <p class="address-form__error-message">
                @error('building')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="address__button">
            <button class="address-form__button" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection