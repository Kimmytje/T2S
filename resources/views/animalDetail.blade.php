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
                <p><span class="material-icons">today</span> from: {{substr($search->from,0,-3)}}</p>
                <p>to: {{substr($search->to,0,-3)}}</p>
                <p><span class="material-icons">sell</span> €{{$search->payment}}.-</p>


                <a href="/searching/{{$search->id}}/contact" class="btn btn-primary">
                    Pas op {{$animal->name}}!
                </a>
            </section>

            <section class="animal-informationR">
                <h4>Notes:</h4>
                <p class="animal-notes">{{$animal->note}}</p>
            </section>
            
        </section>

    </main>
@endsection