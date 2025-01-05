@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}" />
@endsection

@section('content')
<div class="purchase__content">
    <div class="left__content">
        <div class="item__content">
            <img class="item__image" src="{{ asset('storage/' . $item[0]['image']) }}">
            <div class="item__text">
                <div class="item__ttl">
                    <p class="ttl__text">{{ $item[0]['name'] }}</p>
                </div>
                <div class="item__price">
                    <p class="price__text">￥{{ $item[0]['price'] }}</p>
                </div>
            </div>
        </div>
        <div class="pay__content">
            <p class="pay__ttl">支払い方法</p>
            <a class="pay__link" tabindex="-1">変更する</a>
        </div>
        <div class="address__content">
            <p class="address__ttl">配送先</p>
            @if($profile != null)
            <p class="address__text">{{ $profile[0]['address'] }}</p>
            @endif
            <a class="address__link" href="/purchase/address/{{ $item[0]['id'] }}">変更する</a>
        </div>
    </div>
    <div class="right__content">
        <div class="confirm__content">
            <div class="confirm__price">
                <p class="confirm__price--ttl">商品代金</p>
                <p class="confirm__price--text">￥{{ $item[0]['price']}}</p>
            </div>
            <div class="confirm__buy">
                <p class="confirm__buy--ttl">支払い金額</p>
                <p class="confirm__buy--text">￥{{ $item[0]['price']}}</p>
            </div>
            <div class="confirm__pay">
                <p class="confirm__pay--ttl">支払い方法</p>
                <p class="confirm__pay--text">クレジットカード払い</p>
            </div>
        </div>
        <div class="pay__button">
            @if ($profile != null)
            <form class="pay-form" action="{{ route('payment.store') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="pay" value="{{ $item[0]['price'] }}">
                <input type="hidden" name="item_id" value="{{ $item[0]['id'] }}">
                <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key={{ config('stripe.stripe_public_key') }}
                    data-amount=" {{ $item[0]['price'] }}"
                    data-name="Stripe Demo"
                    data-label="購入する"
                    data-description="Online course about integrating Stripe"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-locale="auto"
                    data-currency="JPY">
                </script>
            </form>
            @else
            <button class="check__button">配送先を設定してください</button>
            @endif
        </div>
    </div>
</div>
@endsection