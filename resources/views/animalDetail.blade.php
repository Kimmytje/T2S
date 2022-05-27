@section('title')
    {{"Passen Op Je Dier | $id"}}
@endsection

@extends('body')
@section('content')
    <main class="animal" id="featured" style="background-image: url({{$allMedia->first()->media}});">

        <section class="slides">
            <figure class="slider">
                @foreach ($allMedia as $media)
                    <img class="@if ($loop->first) thumbnail-active @endif thumbnail" src="{{$media->media}}" alt="Picture of the home">
                @endforeach
            </figure>
        </section>

        <section class="animal-information">
            <section class="animal-informationL">
                <h1>{{$animal->name}}</h1>
                <h4>{{$animal->age}} years old</h4>

                <p><span class="material-icons">today</span> from: to:</p>
                <p><span class="material-icons">sell</span> €.-</p>

                

                <button class="btn btn-primary">
                    Pas op {{$animal->name}}!
                </button>
            </section>
            
            <p class="animal-notes">{{$animal->note}}</p>
        </section>

    </main>
@endsection