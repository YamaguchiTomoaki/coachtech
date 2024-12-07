@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="index__header">
    <input type="radio" name="item" value="recommendation" id="recommendation" checked>
    <label for="recommendation">おすすめ</label>
    <input type="radio" name="item" value="mylist" id="mylist">
    <label for="mylist">マイリスト</label>
</div>
<div class="index__content">
    <div class="recommendation__content" id="recommendation">
        @for ($id=0;$id<$itemsCount;$id++)
            <div class="item__card">
            <img src="{{ asset('storage/' . $itemsArray[$id]['image']) }}" alt="">
            <p class="item__name">{{ $itemsArray[$id]['name'] }}</p>
    </div>
    @endfor
</div>
</div>
@endsection