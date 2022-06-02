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

                <a href="/location/{{$address}}/contact" class="btn btn-primary">
                    Maak afspraak!
                </a>
            </section>

            <section class="house-informationR">
                <ul class="filter-container">
                    @if ($location->whatAnimals != "[]")
                        @foreach ($location->whatAnimals as $whatAnimals)
                            <li class="filter-btn btn-secondary">
                                    {{$whatAnimals->for}}
                            </li>
                        @endforeach
                    @else
                        <li class="filter-btn btn-secondary">Any</li>
                    @endif
                </ul>

                <section class="review-container">
                    @if ($location->findReviews != "[]")
                        <p class="rating">{{$location->findReviews->avg('rating')}}</p>
                    @else
                        <p>No reviews yet</p>
                    @endif
                </section>

                <section class="owner-information">
                    <img class="card-thumb" src="{{$location->ownedBy->media}}" alt="Owner profile">
                    <p> {{$location->ownedBy->firstname}} {{$location->ownedBy->lastname}}</p> 
                </section>
            </section>
        </section>

        <article class="reviews-container">
            @foreach ($location->findReviews as $review)
                <figure class="review">
                    <figcaption>
                        <blockquote>
                            {{$review->review}}
                        </blockquote>
                        <h3></h3>
                        <h4 class="rating">{{$review->rating}}</h4>
                    </figcaption>
                </figure>
            @endforeach

            <a href="/location/{{$address}}/addReview" class="btn btn-primary botmid">Add your review</a>

            <a href="#" class="top">Back to Top &#8593;</a>

        </article>

    </main>
@endsection