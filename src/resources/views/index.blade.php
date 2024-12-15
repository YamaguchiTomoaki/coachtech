@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<script src="{{ asset('/js/index.js') }}"></script>
<div class="index__header">
    <input type="radio" name="item" value="recommendation" id="recommendation" onclick="formSwitch()" checked>
    <label for="recommendation">おすすめ</label>
    <input type="radio" name="item" value="mylist" id="mylist" onclick="formSwitch()">
    <label for="mylist">マイリスト</label>
</div>
<div class="index__content">
    <div class="recommendation__content" id="recommendation__content">
        @for ($id=0;$id<$itemsCount;$id++)
            <div class="item__card">
            <form class="detail-form" action="/item/{{ $itemsArray[$id]['id'] }}" method="get">
                <input type="image" class="item__image" name="item" src="{{ asset('storage/' . $itemsArray[$id]['image']) }}">
                <p class="item__name">{{ $itemsArray[$id]['name'] }}</p>
            </form>
    </div>
    @endfor
</div>
<div class="mylist__content" id="mylist__content">
    @for ($id=0;$id<$mylistsCount;$id++)
        <div class="item__card">
        <form class="detail-form" action="/item/{{ $mylistsArray[$id]['id'] }}" method="get">
            <input type="image" class="item__image" name="item" src="{{ asset('storage/' . mylistsArray[$id]['image']) }}">
            <p class="item__name">{{ mylistsArray[$id]['name'] }}</p>
        </form>
</div>
@endfor
</div>
@endsection