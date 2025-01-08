@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment.css') }}" />
@endsection

@section('content')
<div class="comment__content">
    <div class="image__content">
        <img class="item__image" src="{{ asset('storage/' . $item[0]['image']) }}">
    </div>
    <div class="item__content">
        <div class="item__name">
            <h2 class="name__text">{{ $item[0]['name'] }}</h2>
        </div>
        <div class="item__price">
            <p class="price__text">￥{{ $item[0]['price'] }}</p>
        </div>
        <div class="item__form">
            <div class="item__button">
                @if ($favorite_status == 1)
                <form class="favorite-form" action="/remove" method="post">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item[0]['id'] }}">
                    <button class="favorite__btn--off" type="submit">★
                    </button>

                </form>
                @else
                <form class="favorite-form" action="/favorite" method="post">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item[0]['id'] }}">
                    <button class="favorite__btn--on" type="submit">☆
                    </button>
                </form>
                @endif
                <form class="comment-form">
                    <button class="comment__btn" disabled>
                    </button>
                </form>
            </div>
            <div class="item__count">
                <p class="favorite__count">{{ $favoriteCount }}</p>
                <p class="comment__count">{{ $commentCount }}</p>
            </div>
        </div>
        <div class="result__content">
            @for ($id = 0;$id < $usersCount;$id++)
                <div class="comment__result">
                <div class="user__content">
                    @if ($usersArray[$id]['user']['image'] != null)
                    <img class="user__image" src="{{ asset('storage/' . $usersArray[$id]['user']['image']) }}">
                    @else
                    <img class="user__image" src="{{ asset('storage/アイコン.jpg') }}">
                    @endif
                    <p class="user__name">{{ $usersArray[$id]['user']['name'] }}</p>
                </div>
                <div class="comment__text">
                    <p>{!! nl2br(e($usersArray[$id]['comment'])) !!}</p>
                </div>
        </div>
        @endfor
    </div>
    <div class="user__comment">
        <div class="comment__ttl">
            <p class="ttl__text">商品へのコメント</p>
        </div>
        <form class="user__comment-form" action="/comment" method="post">
            @csrf
            <input type="hidden" name="item_id" value="{{ $item[0]['id'] }}">
            <div class="comment__text">
                <textarea name="comment">{{ old('comment') }}</textarea>
            </div>
            <div class="error-message__group">
                <p class="comment-form__error-message">
                    @error('comment')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="comment__button">
                @if ($comment_status == 0)
                <button class="comment__button--submit" type="submit">コメントを送信する</button>
                @else
                <button class="comment__button--disabled" disabled>コメントを送信済みです</button>
                @endif
            </div>
        </form>
    </div>
</div>
</div>
@endsection