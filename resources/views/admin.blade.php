<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <article class="review-container">
        <section class="reviews-list">
            @include('./components/review-cards')
            @include('./components/review-cards')
            @include('./components/review-cards')
        </section>
    </article>
    
</x-app-layout>
