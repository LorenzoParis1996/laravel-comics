@extends('layouts.app')

@section('main-content')

<main>
    <div class="jumbo-main">
    </div>
    <div class="blue-bg">
      <ul class="features">
         <li><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""></li>
         <li><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt=""></li>
         <li><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt=""></li>
         <li><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt=""></li>
         <li><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.png') }}" alt=""></li>
      </ul>

    </div>
</main>

@endsection
