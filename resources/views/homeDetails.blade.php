@section('title')
    {{"Passen Op Je Dier | $address"}}
@endsection

@extends('body')
@section('content')
    <main class="house" id="featured" style="background-image: url({{$allMedia->first()->media}});">
        <section class="slides">
            <figure class="slider">
                @foreach ($allMedia as $media)
                    <img class="@if ($loop->first) thumbnail-active @endif thumbnail" src="{{$media->media}}" alt="Picture of the home">
                @endforeach
            </figure>
        </section>

        <section class="house-information">
            <section class="house-informationL">
                <h1>{{$address}}</h1>
                <h4>{{$location->city}}</h4>

                <button class="btn btn-primary">
                    Vraag oppas aan!
                </button>
            </section>
            

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