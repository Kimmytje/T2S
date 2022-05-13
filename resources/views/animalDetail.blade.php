@section('title')
    {{"Passen Op Je Dier | $id"}}
@endsection

@extends('body')
@section('content')
    <main class="animal">
        <section class="animal-images">

            <figure class="animal-image">
                <img id="featured" src="{{$allMedia->first()->media}}" alt="Picture of the home">
            </figure>

            <section class="slides">
                <figure class="slider">
                    @foreach ($allMedia as $media)
                        <img class="@if ($loop->first) thumbnail-active @endif thumbnail" src="{{$media->media}}" alt="Picture of the home">
                    @endforeach
                </figure>
            </section>
        </section>

        <section class="animal-information">
            <h1>{{$animal->name}}</h1>
            <h4>{{$animal->age}} years old</h4>

            
            <p classe="animal-notes">{{$animal->note}}</p>
        </section>

    </main>
@endsection