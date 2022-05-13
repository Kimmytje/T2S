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

                <h6>Payment</h6>
                <form>
                    <label>
                        <input type="radio" name="less10" id="less10">
                        < 10
                    </label>
                    <label> 
                        <input type="radio" name="10to20" id="10to20">
                        10 - 20 
                    </label>
                    <label>
                        <input type="radio" name="20to30" id="20to30">
                        20 - 30 
                    </label>
                    <label> 
                        <input type="radio" name="30to40" id="30to40">
                        30 - 40
                    </label>
                    <label> 
                        <input type="radio" name="50plus" id="50plus">
                        50 + 
                    </label>
                </form>
            </section>
        </section>

        <section class="cards">
            @foreach ($searching as $search)
                <a href="/searching/{{$search->id}}" class="card" data-kind-of-animal="{{$search->searchingFor->kind}}">
                    @include('./components/searching-cards')
                </a>
            @endforeach
        </section>
    </main>

@endsection