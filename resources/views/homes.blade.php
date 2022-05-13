@section('title')
    {{"Passen Op Je Dier | Home"}}
@endsection

@extends('body')
@section('content')

    <main>
        <section class="filters">  
            <h6 class="border-bottom">Filters</h6>
            <section class="filters-search">
                <h6>Kind of Animals</h6>
                <form>
                    @foreach ($KOA as $kind)
                        <label class="label-checkbox">
                            <input type="checkbox" name="{{$kind->kind}}" id="{{$kind->kind}}">
                            <span>
                                <svg width='12px' height='10px'>
                                    <use xlink:href='#check'></use>
                                </svg>
                            </span>
                            {{$kind->kind}}
                        </label>
                    @endforeach
                </form>
            </section>
        </section>

        <section class="cards">
            @foreach ($locations as $location)
                <a href="/location/{{$location->address}}" class="card" data-for-what-animals="{{$location->address}}">
                    @include('./components/location-cards')
                </a>
            @endforeach
        </section>
    </main>

@endsection