@section('title')
    {{"Passen Op Je Dier | Home"}}
@endsection

@extends('body')
@section('content')

    <main>
        <section class="cards">
            @foreach ($searching as $search)
                <a href="/searching/{{$search->id}}">
                    @include('./components/searching-cards')
                </a>
            @endforeach
        </section>
    </main>

@endsection