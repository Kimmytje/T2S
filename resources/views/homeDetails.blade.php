@section('title')
    {{"Passen Op Je Dier | $address"}}
@endsection

@extends('body')
@section('content')
    <main class="house">
        <section class="house-images">

            <figure class="house-image">
                <img id="featured-house" src="{{$allMedia->first()->media}}" alt="Picture of the home">
            </figure>

            <section class="slides">
                <figure class="slider">
                    @foreach ($allMedia as $media)
                        <img class="@if ($loop->first) thumbnail-active @endif thumbnail" src="{{$media->media}}" alt="Picture of the home">
                    @endforeach
                </figure>
            </section>
        </section>

        <section class="house-information">
            <h1>{{$address}}</h1>
            <h4>{{$location->city}}</h4>

            <ul class="filter-container">
                @if ($location->whatAnimals != "[]")
                    @foreach ($location->whatAnimals as $whatAnimals)
                        <li class="filter-btn btn-secondary">
                                {{$whatAnimals->for}}
                        </li>
                    @endforeach
                @else
                    <li>Any</li>
                @endif
            </ul>
        </section>

    </main>
@endsection