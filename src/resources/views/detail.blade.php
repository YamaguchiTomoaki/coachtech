@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
@endsection

@section('content')
<div class="detail__content">
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
                @if ($comment_status == 0)
                <form class="comment-form" action="/comment" method="get">
                    <button class="comment__btn" type="submit">
                    </button>
                </form>
                @else
                <button class="comment__btn"></button>
                @endif
            </div>
            <div class="item__count">
                <p class="favorite__count">{{ $favoriteCount }}</p>
                <p class="comment__count">{{ $commentCount }}</p>
            </div>
        </div>

        <div class="item__buy">
            @if ($buy_status == 1)
            <button class="soldout__btn">出品者本人です</button>
            @elseif ($buy_status == 2)
            <button class="soldout__btn">購入済み</button>
            @else
            <form class="buy-form" action="/purchase/{{ $item[0]['id'] }}" method="get">
                <button class="buy__btn" type="submit">購入する</button>
            </form>
            @endif
        </div>
        <div class="item__description">
            <h3 class="description__ttl">商品説明</h3>
            <p class="description__text">{!! nl2br(e($item[0]['description'])) !!}</p>
        </div>
        <div class="item__information">
            <h3 class="information__ttl">商品の情報</h3>
            <div class="item__category">
                <h4 class="category__ttl">カテゴリー</h4>
                @for ($id=0;$id<$categoryCount;$id++)
                    <p class="category__data">{{ $item[0]['category'][$id]['category'] }}</p>
                    @endfor
            </div>
            <div class="item__condition">
                <h4 class="condition__ttl">商品の状態</h4>
                <p class="condition__data">{{$item[0]['condition']['condition']}}</p>
            </div>
        </div>
    </div>
</div>
@endsection