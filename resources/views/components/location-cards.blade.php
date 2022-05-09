<article>
    <figure>
        <img src="{{$search->mediaAnimal->media}}" class="card-image" alt="Picture of the animal">
    </figure>

    <section class="card-overlay">
        <section class="card-header">
            <svg class="card-arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>

            <figure>
                <img src="{{$search->mediaUser->media}}" alt="Owner profile"  class="card-thumb">
            </figure>

            <section class="card-headerText">
                <h3 class="card-title"> {{$search->searchRequester->firstname}} </h3>
                <p class="card-status"> {{$search->getTimeAgo($search->created_at)}} </p>
            </section>
        </section>

        <section class="card-description">
            <p><span class="material-icons">today</span> {{substr($search->from,0,-3)}} - {{substr($search->to,0,-3)}}</p>
            <p><span class="material-icons">sell</span> €{{$search->payment}}.-</p>
        </section>
    </section>
</article>