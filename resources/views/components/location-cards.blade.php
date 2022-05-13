<article>
    <figure>
        <img src="{{$location->searchMedia->first()->media}}" class="card-image" alt="Picture of the home">
    </figure>

    <section class="card-overlay">
        <section class="card-header">
            <svg class="card-arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>

            <figure>
                <img src="{{$location->mediaUser->media}}" alt="Owner profile"  class="card-thumb">
            </figure>

            <section class="card-headerText">
                <h3 class="card-title"> {{$location->address}} </h3>
                <p class="card-tagline"> {{$location->ownedBy->firstname}} </p>
            </section>
        </section>

        <section class="card-description">
            @if ($location->whatAnimals != "[]")
                <p><span class="material-icons">pets</span> 
                @foreach ($location->whatAnimals as $whatAnimals)
                    {{$whatAnimals->for}}
                @endforeach
                </p>
            @else
                <p><span class="material-icons">pets</span> Any</p>
            @endif
        </section>
    </section>
</article>