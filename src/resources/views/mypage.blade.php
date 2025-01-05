@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}" />
@endsection

@section('content')
<script src="{{ asset('/js/mypage.js') }}"></script>
<div class="profile__content">
    <div class="user__content">
        @if ($user['image'] != null)
        <img class="user__image" src="{{ asset('storage/' . $user['image']) }}" alt="プロフィール画像">
        @else
        <img class="default__image" src="{{ asset('storage/アイコン.jpg') }}" alt="プロフィール画像">
        @endif
        <p class="user__name">{{ $user['name'] }}</p>
    </div>
    <div class="user__profile">
        <a class="profile__link" href="/mypage/profile">プロフィールを編集</a>
    </div>
</div>
<div class="mypage__header">
    <input type="radio" name="item" value="sell" id="sell" onclick="formSwitch()" checked>
    <label for="sell">出品した商品</label>
    <input type="radio" name="item" value="buy" id="buy" onclick="formSwitch()">
    <label for="buy">購入した商品</label>
</div>

<div class="mypage__content">
    <div class="sell__content" id="sell__content">
        @for ($id=0;$id<$itemsCount;$id++)
            <div class="item__card">
            <form class="detail-form" action="/item/{{ $itemsArray[$id]['id'] }}" method="get">
                <input type="image" class="item__image" name="item" src="{{ asset('storage/' . $itemsArray[$id]['image']) }}">
                <p class="item__name">{{ $itemsArray[$id]['name'] }}</p>
            </form>
    </div>
    @endfor
</div>
<div class="buy__content" id="buy__content">
    @for ($id=0;$id<$buysCount;$id++)
        <div class="item__card">
        <form class="detail-form" action="/item/{{ $buysArray[$id]['id'] }}" method="get">
            <input type="image" class="item__image" name="item" src="{{ asset('storage/' . $buysArray[$id]['item']['image']) }}">
            <p class="item__name">{{ $buysArray[$id]['item']['name'] }}</p>
        </form>
</div>
@endfor
</div>
</div>
@endsection