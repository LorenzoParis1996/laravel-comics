@extends('layouts.app')



@section('comics')

<div class="jumbo-main">
</div>

<div id="comics">

    <div class="container-cards">
        @foreach ($comics as $comic)
        <article class="cards">
            <img src="{{ $comic['thumb'] }}" alt="">
            <p>{{$comic['title']}}</p>
        </article>

        @endforeach
    </div>


</div>

@endsection
