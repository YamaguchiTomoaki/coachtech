@extends('auth.auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}" />
@endsection

@section('content')
<div class="sell__content">
    <div class="sell__ttl">
        <p class="ttl__text">商品の出品</p>
    </div>
    <form class="sell-form" action="/sell" enctype="multipart/form-data" method="post">
        @csrf
        <div class="sell__image">
            <p class="image__ttl">商品画像</p>
            <div class="image__image">
                <label class="file__label" for="form__image">
                    <input type="file" id="form__image" class="image__file" name="image" accept=".jpg">
                </label>

            </div>
        </div>
        <div class="error-message__group">
            <p class="sell-form__error-message">
                @error('image')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div class="sell__detail">
            <div class="detail__ttl">
                <p class="detail__ttl--text">商品の詳細</p>
            </div>
            <div class="detail__category">
                <p class="detail__category--ttl">カテゴリー</p>
                @foreach($categories as $key => $category)
                <input type="checkbox" class="input__category" name="category[]" id="{{ $category->id }}" value="{{ $category->id }}" @if($errors->any()){{ is_array(old('category')) && array_keys(old('category'), $category->id)? 'checked="checked"' : '' }}@endif/>
                <label for="{{ $category->id }}" class="checkbox__label">{{ $category->category }}</label>
                @endforeach
            </div>
            <div class="error-message__group">
                <p class="sell-form__error-message">
                    @error('category')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="detail__condition">
                <p class="detail__condition--ttl">商品の状態</p>
                <select name="condition" id="condition">
                    @foreach($conditions as $condition)
                    <option value="{{ $condition->id }}" @if(old('condition')==$condition->id) selected @endif>{{ $condition->condition }}</option>
                    @endforeach
                </select>
            </div>
            <div class="error-message__group">
                <p class="sell-form__error-message">
                    @error('condition')
                    {{ $message }}
                    @enderror
                </p>
            </div>
        </div>
        <div class="sell__description">
            <div class="description__ttl">
                <p class="description__ttl--text">商品名と説明</p>
            </div>
            <div class="description__name">
                <p class="description__name--ttl">商品名</p>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="error-message__group">
                <p class="sell-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="description__description">
                <p class="description__description--ttl">商品の説明</p>
                <textarea name="description">{{ old('description') }}</textarea>
            </div>
            <div class="error-message__group">
                <p class="sell-form__error-message">
                    @error('description')
                    {{ $message }}
                    @enderror
                </p>
            </div>
        </div>
        <div class="sell__price">
            <div class="price__ttl">
                <p class="price__ttl--text">販売価格</p>
            </div>
            <div class="price__price">
                <p class="price__price--ttl">販売価格</p>
                <input type="text" name="price" value="{{ old('price') }}">
            </div>
            <div class="error-message__group">
                <p class="sell-form__error-message">
                    @error('price')
                    {{ $message }}
                    @enderror
                </p>
            </div>
        </div>
        <div class="sell__button">
            <button class="sell-form__button" type="submit">出品する</button>
        </div>
    </form>

</div>
@endsection